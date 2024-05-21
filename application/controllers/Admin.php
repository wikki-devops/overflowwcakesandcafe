<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper("url");
        $this->load->model("GetData");
    }

    public function user()
    {
        $data["users"] = $this->GetData->users();
        $data["view_page"] = "user";
        $this->load->view("welcome_message", $data);
    }

    public function logout()
    {
        // unset user data
        $this->session->unset_userdata("login");
        $this->session->unset_userdata("user_id");
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("role_id");
        $this->session->unset_userdata("email");
        $this->session->unset_userdata("image");
        $this->session->unset_userdata("site_logo");

        //Set Message
        $this->session->set_flashdata("success", "You are logged out.");
        redirect(base_url() . "admin/index");
    }

    public function index()
    {
        $this->form_validation->set_rules("email", "Email", "required");
        $this->form_validation->set_rules("password", "Password", "required");
        if ($this->form_validation->run() === false) {
            $this->load->view("admin/login");
        } else {
            $this->load->model("GetData");
            $email = $this->input->post("email");
            $password = $this->input->post("password");
            $check_login = $this->GetData->user($email, $password);
            if ($check_login) {
                $this->session->set_userdata("user_id", $check_login["id"]);
                redirect(base_url() . "admin/products");
            } else {
                $this->session->set_flashdata(
                    "error_msg",
                    "Invalid email or password. Please try again."
                );
                $this->load->view("admin/index");
            }
        }
    }
    public function adminLogin()
    {
        $this->form_validation->set_rules("email", "Email", "required");
        $this->form_validation->set_rules("password", "Password", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("admin/login");
        } else {
            // get email and Encrypt Password
            $email = $this->input->post("email");
            $encrypt_password = md5($this->input->post("password"));

            $user_id = $this->GetData->adminLogin($email, $encrypt_password);

            if ($user_id && $user_id->status == 1) {
                //Create Session
                $user_data = [
                    "name" => $user_id->name,
                    "user_id" => $user_id->id,
                    "email" => $user_id->email,
                    "login" => true,
                    "role" => $user_id->role_id,
                ];

                $this->session->set_userdata($user_data);

                //Set Message
                $this->session->set_flashdata(
                    "success",
                    "Welcome to Overfloww Admin Dashboard."
                );
                redirect(base_url() . "admin/products");
            } else {
                $this->session->set_flashdata(
                    "danger",
                    "Login Credential in invalid!"
                );
                redirect(base_url() . "admin/index");
            }
        }
    }
    public function delete($id)
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }

        $table = base64_decode($this->input->get("table"));
        $this->GetData->delete($id, $table);
        $this->session->set_flashdata(
            "Error",
            "Data has been deleted Successfully."
        );
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    public function products()
    {
        $this->db->select("id");
        $this->db->where("category", 1);
        $this->db->where("status", 1);    
        $query1 = $this->db->get("products");
        $count1 = $query1->num_rows();

        $this->db->select("id");
        $this->db->where("category", 2);
        $this->db->where("status", 1);    
        $query2 = $this->db->get("products");
        $count2 = $query2->num_rows();
        
        $this->db->select("id");
        $this->db->where("category", 3);
        $this->db->where("status", 1);    
        $query3 = $this->db->get("products");
        $count3 = $query3->num_rows();

        $this->db->select("id");
        $this->db->where("status", 1);    
        $query4 = $this->db->get("products");
        $count4 = $query4->num_rows();

        $this->db->select("id");
        $this->db->where("category", 1);
        $this->db->where("status", 0);    
        $query5 = $this->db->get("products");
        $count5 = $query5->num_rows();

        $this->db->select("id");
        $this->db->where("category", 2);
        $this->db->where("status", 0);    
        $query6 = $this->db->get("products");
        $count6 = $query6->num_rows();
        
        $this->db->select("id");
        $this->db->where("category", 3);
        $this->db->where("status", 0);    
        $query7 = $this->db->get("products");
        $count7 = $query7->num_rows();

        $this->db->select("id");
        $this->db->where("status", 0);    
        $query8 = $this->db->get("products");
        $count8 = $query8->num_rows();


        $data = ["count1" => $count1,"count2" => $count2,"count3" => $count3,"count4" => $count4,
        "count5" => $count5,"count6" => $count6,"count7" => $count7,"count8" => $count8,];

        $data["categories"] = $this->GetData->getcategoriesmain();
        $data["products"] = $this->GetData->getproducts();
        $data["product_type"] = $this->GetData->getcategories();
        $data["view_page"] = "admin/products";
        $this->load->view("admin/index", $data);
    }

    public function get_product_types()
    {
        $category_id = $this->input->get('category_id');
        $product_types = $this->GetData->get_product_types_by_category($category_id);
        echo json_encode($product_types);
    }

    public function product_type()
    {
        $data["categories"] = $this->GetData->getcategories();
        $data["products"] = $this->GetData->getproducts();
        $data["view_page"] = "admin/product-type";
        foreach ($data["categories"] as $key => $category) {
            $data["categories"][$key]['product_count'] = $this->GetData->getProductCountByCategory($category['id']);
        }
        $this->load->view("admin/index", $data);
    }

    public function add_producttype()
    {
        $data["view_page"] = "admin/product-type";
    
        $this->form_validation->set_rules("type_name", "Type Name", "required");
    
        if ($this->form_validation->run() === false) {
            $this->load->view("admin/index", $data);
        } else {
            $type_name = $this->input->post("type_name");
    
            $existing_type = $this->GetData->check_product_type_exists($type_name);
    
            if ($existing_type) {
                $this->session->set_flashdata(
                    "warning", 
                    "Product type already exists."
                );
            } else {
                $this->GetData->add_producttype($type_name);
                $this->session->set_flashdata("success", "Product type added successfully.");
            }    
            redirect(base_url() . "admin/product-type");
        }
    }

    public function add_product()
    {
        $data["view_page"] = "admin/products";

        $this->form_validation->set_rules("varieties", "varieties", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("admin/index", $data);
        } else {
            $config["upload_path"] = "./assets/admin/products/";
            $config["allowed_types"] = "gif|jpg|png|jpeg";

            $this->load->library("upload", $config);
            if (!$this->upload->do_upload()) {
                $errors = ["error" => $this->upload->display_errors()];
                $uploaded_image = "noimage.png";
            } else {
                $data = ["upload_data" => $this->upload->data()];
                $uploaded_image = $this->get_next_image_id() . ".png";
                $this->rename_uploaded_image($this->upload->data("full_path"), $uploaded_image);
            }

            $this->GetData->addproduct($uploaded_image);
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Residential Card Content has been created."
            );
            redirect(base_url() . "admin/products");
        }

    }
    private function get_next_image_id()
    {
        // Assuming you are using CodeIgniter's database library for database operations
        $query = $this->db->query("SELECT MAX(id) AS max_id FROM products");
        $row = $query->row();

        // Check if any row is returned
        if ($row) {
            // If there are existing rows, return the next ID
            return $row->max_id + 1;
        } else {
            // If no rows are returned (i.e., no existing images), start from 1
            return 1;
        }
    }

    private function rename_uploaded_image($full_path, $new_name)
    {
        // Rename the uploaded image with the new name
        $new_path = pathinfo($full_path, PATHINFO_DIRNAME) . "/" . $new_name;
        rename($full_path, $new_path);
    }

    public function editproduct($id)
    {
        $this->load->helper("form");
        $data["product"] = $this->GetData->getproducts($id);
        $data["view_page"] = "admin/editproduct";
    
        $this->form_validation->set_rules("varieties", "varieties", "required");
    
        if ($this->form_validation->run() === false) {
            $this->load->view("admin/index", $data);
        } else {
            $existing_image_name = $data["product"]["image"]; // Get the existing image name
    
            $config["upload_path"] = "./assets/admin/products";
            $config["allowed_types"] = "gif|jpg|png|jpeg";
            $config["overwrite"] = true; // Ensure to overwrite existing file
            $config["file_name"] = $existing_image_name; // Set the file name to be the same as existing image
    
            $this->load->library("upload", $config);
    
            // Check if file is uploaded
            if (!$this->upload->do_upload("userfile")) {
                // If upload fails, keep the existing image name
                $errors = ["error" => $this->upload->display_errors()];
                $uploaded_image = $existing_image_name;
            } else {
                // If upload succeeds, get the uploaded file name
                $data = ["upload_data" => $this->upload->data()];
                $uploaded_image = $existing_image_name; // Use existing image name to replace it
            }
    
            $this->GetData->updateproduct($uploaded_image, $id);
            // Set Message
            $this->session->set_flashdata(
                "success",
                "Product Details Updated Successfully."
            );
            redirect(base_url() . "admin/products");
        }
    }
        
    public function galleries()
    {
        $data["galleries"] = $this->GetData->getgalleries();
        $data["view_page"] = "admin/galleries";
        $this->load->view("admin/index", $data);
    }

    public function product_list()
    {
        $data["products"] = $this->GetData->getproducts();
        $data["categories"] = $this->GetData->getcategories();

        $data["view_page"] = "admin/product-list";
        $this->load->view("admin/index", $data);
    }

    public function updateStatus() {
        $productId = $this->input->post('productId');
        $isChecked = $this->input->post('isChecked');
    
        // Update product status in the database
        $this->load->model('GetData');
        $this->GetData->updateProductStatus($productId, $isChecked);
    
        // $this->session->set_flashdata(
        //     "success",
        //     "Status updated successfully."
        // );

        // redirect(base_url() . "admin/bestseller");

    }
    public function updatebestselling() {
        $productId = $this->input->post('productId');
        $isChecked = $this->input->post('isChecked');
    
        $this->load->model('GetData');
        
        $bestsellingCount = $this->GetData->countBestsellingProducts();
    
    if ($isChecked == 1 && $bestsellingCount >= 12) {

        $this->session->set_flashdata(
            "Error",
            "Limit of bestselling products has been reached. Cannot update."
        );
        var_dump($this->session->flashdata('Error'));

        redirect(base_url() . "admin/bestseller");
        return;
    }
    
        $this->GetData->updatebestselling($productId, $isChecked);
    }
    
    public function bestseller()
    {
        $data["products"] = $this->GetData->getproducts();
        $data["view_page"] = "admin/bestseller";
        $this->load->view("admin/index", $data);
    }
    
}