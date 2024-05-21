<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper("url", "form");
        $this->load->model("GetData");
    }
	public function index()
	{
		$data["categories"] = $this->GetData->getcategories();
		$data["products"] = $this->GetData->getproducts();
		$data["category"] = $this->GetData->getcategoriesmain();
		$data["testimonials"] = $this->GetData->gettestimonials(4);
        $data["view_page"] = "index";
        $this->load->view("welcome_message", $data);	
	}
	public function about()
	{

        $data["pagetitle"] = 'All you need is<br><span class="text-theme font-style font-size">Love & Layers</span> of cream!';
        $data["title"] = "about";
		$data["breadcum"] = "https://ik.imagekit.io/7vdby4475/images/breadcums/breadcums.jpg?updatedAt=1714458502090";
        $data["view_page"] = "about";
        $this->load->view("welcome_message", $data);	
	}
	public function cakes()
{
    $data["categories"] = $this->GetData->getcategories();
    $data["products"] = $this->GetData->getproducts();
    $data["pagetitle"] = 'You, us and <span class="text-theme font-style font-size">Cakes!</span><br> - A Cake-ly <span class="text-theme font-style">Combo!<span>';
    $data["title"] = "Cake Varieties";
    $data["breadcum"] = "https://ik.imagekit.io/7vdby4475/images/breadcums/cakes-breadcum.jpg?updatedAt=1714458503944";
    $data["view_page"] = "cakes";

    foreach ($data["categories"] as $key => $category) {
        $data["categories"][$key]['product_count'] = $this->GetData->getProductCountByCategory($category['id']);
    }

    $this->load->view("welcome_message", $data);    
}

	public function bakery()
	{
		$data["categories"] = $this->GetData->getcategories();
		$data["products"] = $this->GetData->getproducts();
        $data["pagetitle"] = 'Our Baked<br><span class="text-theme font-style font-size">Goodnesses!</span>';
		$data["title"] = "Bakery varieties";
		$data["breadcum"] = "https://ik.imagekit.io/7vdby4475/images/breadcums/bakery-breadcum.jpg?updatedAt=1714458502877";
        $data["view_page"] = "bakery";
			foreach ($data["categories"] as $key => $category) {
				$data["categories"][$key]['product_count'] = $this->GetData->getProductCountByCategory($category['id']);
			}
        $this->load->view("welcome_message", $data);	
	}
	public function cafe()
	{
		$data["categories"] = $this->GetData->getcategories();
		$data["products"] = $this->GetData->getproducts();
        $data["pagetitle"] = 'Our cafe <span class="text-theme font-style font-size">classics</span><br>For your comfort <span class="text-theme font-style">cravings!</span>';		
		$data["title"] = "Cafe Varieties";
		$data["breadcum"] = "https://ik.imagekit.io/7vdby4475/images/breadcums/cafe-breadcum.jpg?updatedAt=1714458502824";
        $data["view_page"] = "cafe";
			foreach ($data["categories"] as $key => $category) {
				$data["categories"][$key]['product_count'] = $this->GetData->getProductCountByCategory($category['id']);
			}
        $this->load->view("welcome_message", $data);	
	}
	
	public function gallery()
	{
		$data["galleries"] = $this->GetData->getgalleries();
        $data["pagetitle"] = 'Showcase of our<br><span class="text-theme font-style font-size">Baked Beauties!</span>';
        $data["title"] = "gallery";
		$data["breadcum"] = "https://ik.imagekit.io/7vdby4475/images/breadcums/gallery-breadcum.jpg?updatedAt=1714458504400";
        $data["view_page"] = "gallery";
        $this->load->view("welcome_message", $data);	
	}
	public function testimonials()
	{
		$data["testimonials"] = $this->GetData->gettestimonials();
        $data["pagetitle"] = 'Flavourful <span class="text-theme font-style font-size">stories</span><br>From<span class="text-theme font-style"> you!</span>';
        $data["title"] = "testimonials";
		$data["breadcum"] = "https://ik.imagekit.io/7vdby4475/images/breadcums/testimonial-breadcum.jpg?updatedAt=1714458504591";
        $data["view_page"] = "testimonials";
        $this->load->view("welcome_message", $data);	
	}
	public function contact()
	{

        $data["pagetitle"] = 'We bake it <span class="text-theme font-style font-size">Happen!</span><br>Get in<span class="text-theme font-style"> Touch With Us</span>';
		$data["title"] = "Contact";
		$data["breadcum"] = "https://ik.imagekit.io/7vdby4475/images/breadcums/contact-breadcum.jpg?updatedAt=1714458504336";
        $data["view_page"] = "contact";
        $this->load->view("welcome_message", $data);	
	}

}
