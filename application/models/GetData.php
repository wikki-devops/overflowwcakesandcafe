<?php class GetData extends CI_Model
{
    
    public function getcategories($id = false, $limit = false, $offset = false)
    {
        $this->load->database();
        if ($limit) {
            $this->db->limit($limit, $offset);
        }

        if ($id === false) {
            $query = $this->db->get("product_type");
            return $query->result_array();
        }

        $query = $this->db->get_where("product_type", ["id" => $id]);
        return $query->row_array();
    }
    public function getcategoriesmain()
    {
        $this->load->database();
        $this->db->order_by('id', 'ASC');
        return $this->db->get("category")->result_array();
    }

    public function getproducts($id = false, $limit = false, $offset = false)
    {
        $this->load->database();
        if ($limit) {
            $this->db->limit($limit, $offset);
        }

        if ($id === false) {
            $query = $this->db->get("products");
            return $query->result_array();
        }

        $query = $this->db->get_where("products", ["id" => $id]);
        return $query->row_array();
    }
    public function getProductCountByCategory($categoryId)
    {
        // Query to count products for a specific category
        $this->db->where('type_name', $categoryId);
        $query = $this->db->get('products');
        return $query->num_rows();
    }

    public function getgalleries()
    {
        $this->load->database();
        return $this->db->get("galleries")->result_array();
    }
    
    public function gettestimonials($limit = null)
    {
        if ($limit !== null) {
            $this->db->limit($limit);
        }
        return $this->db->get("testimonials")->result_array();
    }
    
    // admin

    public function users()
    {
        $this->load->database();
        return $this->db->get("user")->result_array();
    }

    public function adminLogin($email, $encrypt_password)
    {
        $this->load->database();
        //Validate
        $this->db->where("email", $email);
        $this->db->where("password", $encrypt_password);

        $result = $this->db->get("user");

        if ($result->num_rows() == 1) {
            return $result->row(0);
        } else {
            return false;
        }
    }
    public function delete($id, $table)
    {
        $this->load->database();
        $this->db->where("id", $id);
        $this->db->delete($table);
        return true;
    }

    public function add_producttype()
    {
        $this->load->database();
        $data = [
            "type_name" => $this->input->post("type_name"),
            "category" => $this->input->post("category"),
        ];
        return $this->db->insert("product_type", $data);
    }

    public function get_product_types_by_category($category_id)
    {
        $this->db->select('id, type_name');
        $this->db->where('category', $category_id);
        return $this->db->get('product_type')->result_array();
    }

    public function addproduct($uploaded_image)
    {
        $this->load->database();
        
        $status = $this->input->post("status");
        if ($status === null) {
            $status = 1;
        }
        
        $data = [
            "category" => $this->input->post("category"),
            "type_name" => $this->input->post("type_name"),
            "varieties" => $this->input->post("varieties"),
            "image" => $uploaded_image,
            "price1" => $this->input->post("price1"),
            "price2" => $this->input->post("price2"),
            "status" => $status,
        ];
        
        return $this->db->insert("products", $data);
    }
        public function updateproduct($uploaded_image)
    {
        $this->load->database();
        $data = [
            "varieties" => $this->input->post("varieties"),
            "price1" => $this->input->post("price1"),
            "price2" => $this->input->post("price2"),
            "image" => $uploaded_image,
        ];
        $this->db->where("id", $this->input->post("id"));
        return $this->db->update("products", $data);
    }

    public function updateProductStatus($productId, $isChecked) {
        $data = array(
            'status' => $isChecked
        );
        $this->db->where('id', $productId);
        $this->db->update('products', $data);
    }
    public function countBestsellingProducts() {
        $this->db->where('bestselling', 1);
        return $this->db->count_all_results('products');
    }

    public function updatebestselling($productId, $isChecked) {
        $data = array(
            'bestselling' => $isChecked
        );
        $this->db->where('id', $productId);
        $this->db->update('products', $data);
    }
    public function check_product_type_exists($type_name)
    {
        $this->db->where('type_name', $type_name);
        $query = $this->db->get('product_type');

        return $query->num_rows() > 0;
    }

}
