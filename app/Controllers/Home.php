<?php

namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\Cms\SuperModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->HomeModel  = new HomeModel();
        $this->SuperModel = new SuperModel();
    }

    public function index()
    {
        $data = array();
        $data['sliders']      = $this->HomeModel->select_all_Sliders_model_m();
        $data['allcats']      = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']   = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['lastproducts'] = $this->HomeModel->select_last_products_model_m();
        $data['featproducts'] = $this->HomeModel->select_feat_products_model_m();
        $data['team']         = $this->HomeModel->select_last_team_model_m();
        $data['faqq']         = $this->HomeModel->select_last_faq_model_m();
        $data['price'] = $this->HomeModel->select_last_price_model_m();
        $data['membership']   = $this->HomeModel->select_last_membership_model_m();
        $data['clients']      = $this->HomeModel->select_last_clients_model_m();
        $data['mainservices'] = $this->HomeModel->select_last_mainservices_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['news']         = $this->HomeModel->select_last_news_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();

        // FIX: items lists should use items methods, not news
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['itemsl'] = $this->HomeModel->select_last_itemss_model_m();

        $data['projects']   = $this->HomeModel->select_last_projects_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['testimonial'] = $this->HomeModel->select_last_testimonial_model_m();

        $data['label']       = $this->HomeModel->select_label_page_model_m();
        $data['faq']         = $this->HomeModel->select_faq_page_model_m();
        $data['csr']         = $this->HomeModel->select_csr_page_model_m();
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();


        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();

        return view('public/header', $data)
            . view('public/index',  $data)
            . view('public/footer');
    }

    public function about()
    {
        $data = array();
        $data['page']       = "about";
        $data['allcats']    = $this->HomeModel->select_all_categorys_model_m();
        $data['faq']         = $this->HomeModel->select_faq_page_model_m();
        $data['allsubcats'] = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['label']       = $this->HomeModel->select_label_page_model_m();
        $data['services']   = $this->HomeModel->select_last_services_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['csr']        = $this->HomeModel->select_csr_page_model_m();
        $data['csrr']       = $this->HomeModel->select_last_csr_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['faqq']       = $this->HomeModel->select_last_faq_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['team']       = $this->HomeModel->select_last_team_model_m();
        $data['membership'] = $this->HomeModel->select_last_membership_model_m();
        $data['partner']    = $this->HomeModel->select_last_partner_model_m();
        $data['about']      = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        return view('public/header', $data)
            . view('public/about',  $data)
            . view('public/footer');
    }
    public function distribution()
    {
        $data = array();
        $data['page']       = "distribution";
        $data['allcats']    = $this->HomeModel->select_all_categorys_model_m();
        $data['faq']         = $this->HomeModel->select_faq_page_model_m();
        $data['allsubcats'] = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['label']       = $this->HomeModel->select_label_page_model_m();
        $data['services']   = $this->HomeModel->select_last_services_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['csr']        = $this->HomeModel->select_csr_page_model_m();
        $data['csrr']       = $this->HomeModel->select_last_csr_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['faqq']       = $this->HomeModel->select_last_faq_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['team']       = $this->HomeModel->select_last_team_model_m();
        $data['membership'] = $this->HomeModel->select_last_membership_model_m();
        $data['partner']    = $this->HomeModel->select_last_partner_model_m();
        $data['about']      = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        return view('public/header', $data)
            . view('public/distribution',  $data)
            . view('public/footer');
    }

    public function price()
    {
        $data = array();
        $data['page']       = "price";
        $data['allcats']    = $this->HomeModel->select_all_categorys_model_m();
        $data['faq']         = $this->HomeModel->select_faq_page_model_m();
        $data['allsubcats'] = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['label']       = $this->HomeModel->select_label_page_model_m();
        $data['services']   = $this->HomeModel->select_last_services_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['csr']        = $this->HomeModel->select_csr_page_model_m();
        $data['csrr']       = $this->HomeModel->select_last_csr_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['faqq']       = $this->HomeModel->select_last_faq_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['items']      = $this->HomeModel->select_last_items_model_m();
        $data['team']       = $this->HomeModel->select_last_team_model_m();
        $data['price'] = $this->HomeModel->select_last_price_model_m();
        $data['membership'] = $this->HomeModel->select_last_membership_model_m();
        $data['partner']    = $this->HomeModel->select_last_partner_model_m();
        $data['about']      = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
        foreach ($data['price'] as &$service) {
            // Split the feature_text string into an array of features
            if (!empty($service['feature_text'])) {
                $service['features'] = explode(', ', $service['feature_text']);
            } else {
                $service['features'] = [];
            }
        }

        return view('public/header', $data)
            . view('public/price',  $data)
            . view('public/footer');
    }

    public function faq()
    {
        $data = array();
        $data['page']       = "faq";
        $data['allcats']    = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats'] = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['services']   = $this->HomeModel->select_last_services_model_m();
        $data['team']       = $this->HomeModel->select_last_team_model_m();
        $data['faq']         = $this->HomeModel->select_faq_page_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['membership'] = $this->HomeModel->select_last_membership_model_m();
        $data['partner']    = $this->HomeModel->select_last_partner_model_m();
        $data['faq']        = $this->HomeModel->select_faq_page_model_m();
        $data['faqq']       = $this->HomeModel->select_last_faq_model_m();
        $data['csrr']       = $this->HomeModel->select_last_csr_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        return view('public/header', $data)
            . view('public/faq',   $data)
            . view('public/footer');
    }

    public function csr()
    {
        $data = array();
        $data['page']       = "csr";
        $data['allcats']    = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats'] = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['services']   = $this->HomeModel->select_last_services_model_m();
        $data['team']       = $this->HomeModel->select_last_team_model_m();
        $data['membership'] = $this->HomeModel->select_last_membership_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['partner']    = $this->HomeModel->select_last_partner_model_m();
        $data['csr']        = $this->HomeModel->select_csr_page_model_m();
        $data['faqq']       = $this->HomeModel->select_last_faq_model_m();
        $data['csrr']       = $this->HomeModel->select_last_csr_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        return view('public/header', $data)
            . view('public/csr',  $data)
            . view('public/footer');
    }

    public function events()
    {
        $data = array();
        $data['page']       = "events";
        $data['allcats']    = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats'] = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['membership'] = $this->HomeModel->select_last_membership_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['services']   = $this->HomeModel->select_last_services_model_m();
        $data['news']       = $this->HomeModel->select_last_news_model_m();
        $data['about']      = $this->HomeModel->select_about_page_model_m();
        $data['team']       = $this->HomeModel->select_team_page_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        return view('public/header', $data)
            . view('public/events', $data)
            . view('public/footer');
    }

    public function items()
    {
        $data = array();
        $data['page']       = "items";
        $data['allcats']    = $this->HomeModel->select_all_categorys_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['allsubcats'] = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['membership'] = $this->HomeModel->select_last_membership_model_m();
        $data['services']   = $this->HomeModel->select_last_services_model_m();
        $data['items']      = $this->HomeModel->select_last_items_model_m();
        $data['about']      = $this->HomeModel->select_about_page_model_m();
        $data['team']       = $this->HomeModel->select_team_page_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        return view('public/header', $data)
            . view('public/items', $data)
            . view('public/footer');
    }

    public function projects()
    {
        $data = array();
        $data['page']       = "projects";
        $data['allcats']    = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats'] = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['membership'] = $this->HomeModel->select_last_membership_model_m();
        $data['services']   = $this->HomeModel->select_last_services_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['projects']   = $this->HomeModel->select_last_projects_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['about']      = $this->HomeModel->select_about_page_model_m();
        $data['team']       = $this->HomeModel->select_team_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        return view('public/header', $data)
            . view('public/projects', $data)
            . view('public/footer');
    }

    public function training()
    {
        $data = array();
        $data['page']       = "training";
        $data['allcats']    = $this->HomeModel->select_all_categorys_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['allsubcats'] = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['membership'] = $this->HomeModel->select_last_membership_model_m();
        $data['services']   = $this->HomeModel->select_last_services_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['projects']   = $this->HomeModel->select_last_projects_model_m();
        $data['about']      = $this->HomeModel->select_about_page_model_m();
        $data['team']       = $this->HomeModel->select_team_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        return view('public/header',   $data)
            . view('public/training', $data)
            . view('public/footer');
    }

    public function testimonial()
    {
        $data = array();
        $data['page']        = "testimonial";
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['membership']  = $this->HomeModel->select_last_membership_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['testimonial'] = $this->HomeModel->select_last_testimonial_model_m();
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['team']        = $this->HomeModel->select_team_page_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        return view('public/header',    $data)
            . view('public/testimonial', $data)
            . view('public/footer');
    }

    public function team()
    {
        $data = array();
        $data['page']       = "team";
        $data['allcats']    = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats'] = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['services']   = $this->HomeModel->select_last_services_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['team']       = $this->HomeModel->select_team_page_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['about']      = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        return view('public/header', $data)
            . view('public/team',  $data)
            . view('public/footer');
    }

    public function membership()
    {
        $data = array();
        $data['page']        = "membership";
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['membership']  = $this->HomeModel->select_membership_page_model_m();
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        return view('public/header',   $data)
            . view('public/membership', $data)
            . view('public/footer');
    }

    public function clients()
    {
        $data = array();
        $data['page']        = "clients";
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['clients']     = $this->HomeModel->select_clients_page_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        return view('public/header', $data)
            . view('public/clients', $data)
            . view('public/footer');
    }

    public function mainservices()
    {
        $data = array();
        $data['page']        = "mainservices";
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['mainservices'] = $this->HomeModel->select_last_mainservices_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        return view('public/header',    $data)
            . view('public/mainservices', $data)
            . view('public/footer');
    }
    public function catalogue()
    {
        $data = array();
        $data['page']        = "catalogue";
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['mainservices'] = $this->HomeModel->select_last_mainservices_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        return view('public/header',    $data)
            . view('public/catalogue', $data)
            . view('public/footer');
    }


    public function partner()
    {
        $data = array();
        $data['page']       = "partner";
        $data['allcats']    = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats'] = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['services']   = $this->HomeModel->select_last_services_model_m();
        $data['partner']    = $this->HomeModel->select_partner_page_model_m();
        $data['about']      = $this->HomeModel->select_about_page_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        return view('public/header', $data)
            . view('public/partner', $data)
            . view('public/footer');
    }

    public function allproducts()
    {
        $data   = array();
        $pager  = service('pager');
        $page   = isset($_GET['page']) ? $_GET['page'] : 1; // no '??'
        $perPage = 9;
        $total  = $this->HomeModel->count_all_products();

        $data['allprod'] = $this->HomeModel->select_products_by_all_model_m($perPage, ($page - 1) * $perPage);
        $data['pager']   = $pager->makeLinks($page, $perPage, $total, 'default_costum');

        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['page']        = "allproducts";
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();

        return view('public/header',  $data)
            . view('public/allproducts', $data)
            . view('public/footer');
    }

    public function products_by_category($cat_id)
    {
        $data   = array();
        $pager  = service('pager');
        $page   = isset($_GET['page']) ? $_GET['page'] : 1;
        $perPage = 9;
        $total  = $this->HomeModel->count_products_by_category($cat_id);

        $data['prod_by_cat'] = $this->HomeModel->select_products_by_category_model_m($cat_id, $perPage, ($page - 1) * $perPage);
        $data['pager']       = $pager->makeLinks($page, $perPage, $total, 'default_costum');

        $data['page']        = "products_by_category";
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['subcatrelated']  = $this->HomeModel->select_sub_categories_by_category_m($cat_id);
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['cat_info']    = $this->HomeModel->select_category_details_model_m($cat_id);

        return view('public/header', $data)
            . view('public/products_by_cat', $data)
            . view('public/footer');
    }

    public function products_by_subcat($cat_id, $subcat_id)
    {
        $data    = array();
        $data['page'] = "products_by_subcat";

        $pager   = service('pager');
        $page    = isset($_GET['page']) ? $_GET['page'] : 1;
        $perPage = 9;
        $total   = $this->HomeModel->count_products_by_subcat($cat_id, $subcat_id);

        $data['prod_by_subcat'] = $this->HomeModel->select_products_by_subcat_model_m($cat_id, $subcat_id, $perPage, ($page - 1) * $perPage);
        $data['pager']          = $pager->makeLinks($page, $perPage, $total, 'default_costum');

        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['about']       = $this->HomeModel->select_about_page_model_m();

        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['subcatrelated']  = $this->HomeModel->select_sub_categories_by_category_m($cat_id);
        $data['subcat_info'] = $this->HomeModel->select_sub_categories_details_model_m($subcat_id);

        return view('public/header', $data)
            . view('public/products_by_subcat', $data)
            . view('public/footer');
    }
    public function subcat_bycat($cat_id)
    {
        $catId = (int) $cat_id;

        $data = [];
        $data['page']   = 'subcat_bycat';
        $data['cat_id'] = $catId;

        // Validate category
        $data['cat_info'] = $this->HomeModel->select_category_details_model_m($catId);
        if (!$data['cat_info']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Pagination setup
        $pager   = service('pager');
        $page    = (int) ($this->request->getGet('page') ?? 1);
        if ($page < 1) {
            $page = 1;
        }
        $perPage = 12;

        $total = $this->HomeModel->count_subcats_by_cat($catId);

        $data['subcats'] = $this->HomeModel->select_subcats_by_cat(
            $catId,
            $perPage,
            ($page - 1) * $perPage
        );

        // Keep pager links on the same path
        $pager->setPath(site_url("home/subcat_bycat/{$catId}"));
        $data['pager'] = $pager->makeLinks($page, $perPage, $total, 'default_costum');

        // (Optional) shared data your layout needs
        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();

        return view('public/header', $data)
            . view('public/subcat_bycat', $data)
            . view('public/footer');
    }


    public function productdetails($product_id)
    {
        $data = array();
        $data['page']        = "productdetails";
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();

        $data['product_info']    = $this->HomeModel->select_product_details_model_m($product_id);
        $data['productgall']     = $this->HomeModel->select_gallery_product_model_m($product_id);
        //echo "<pre>";print_r($data['productgall'] );die();
        $data['product_related'] = $this->HomeModel->select_product_related_model_m($product_id, $data['product_info']['categories_id']);

        return view('public/header', $data)
            . view('public/productdetails', $data)
            . view('public/footer');
    }

    public function services()
    {
        $data = array();
        $data['page']        = "services";
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
        $data['membership']  = $this->HomeModel->select_last_membership_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['allservices'] = $this->HomeModel->select_services_model_m();
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();

        return view('public/header', $data)
            . view('public/services', $data)
            . view('public/footer');
    }

    public function servicesdetails($services_id)
    {
        $data = array();
        $data['page']        = "servicesdetails";
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['membership']  = $this->HomeModel->select_last_membership_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['servicesinfo'] = $this->HomeModel->select_servicesinfo_model_m($services_id);
        $data['servicesgall'] = $this->HomeModel->select_gallery_services_model_m($services_id);
        $data['servicesrelated'] = $this->HomeModel->select_related_services_model_m($services_id);

        return view('public/header', $data)
            . view('public/servicesdetails', $data)
            . view('public/footer');
    }

    public function educational()
    {
        $data = array();
        $data['page']        = "educational";
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
        $data['membership']  = $this->HomeModel->select_last_membership_model_m();
        $data['allservices'] = $this->HomeModel->select_services_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();

        return view('public/header', $data)
            . view('public/educational', $data)
            . view('public/footer');
    }

    public function eventsdetails($news_id)
    {
        $data = array();
        $data['page']        = "eventsdetails";
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['membership']  = $this->HomeModel->select_last_membership_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['news']        = $this->HomeModel->select_last_news_model_m();
        $data['newsinfo']    = $this->HomeModel->select_newsinfo_model_m($news_id);
        $data['newsgall']    = $this->HomeModel->select_gallery_news_model_m($news_id);
        $data['newsrelated'] = $this->HomeModel->select_related_news_model_m($news_id);

        return view('public/header', $data)
            . view('public/eventsdetails', $data)
            . view('public/footer');
    }

    public function itemsdetails($items_id)
    {
        $data = array();
        $data['page']        = "itemsdetails";
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['membership']  = $this->HomeModel->select_last_membership_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['items']       = $this->HomeModel->select_last_items_model_m();

        // FIX: use $items_id, not $news_id
        $data['itemsinfo']   = $this->HomeModel->select_itemsinfo_model_m($items_id);
        $data['itemsgall']   = $this->HomeModel->select_gallery_items_model_m($items_id);
        $data['itemsrelated'] = $this->HomeModel->select_related_items_model_m($items_id);

        return view('public/header', $data)
            . view('public/itemsdetails', $data)
            . view('public/footer');
    }

    public function projectsdetails($projects_id)
    {
        $data = array();
        $data['page']        = "projectsdetails";
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['membership']  = $this->HomeModel->select_last_membership_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['projects']    = $this->HomeModel->select_last_projects_model_m();
        $data['projectsinfo'] = $this->HomeModel->select_projectsinfo_model_m($projects_id);
        $data['projectsgall'] = $this->HomeModel->select_gallery_projects_model_m($projects_id);
        $data['projectsrelated'] = $this->HomeModel->select_related_projects_model_m($projects_id);

        return view('public/header', $data)
            . view('public/projectsdetails', $data)
            . view('public/footer');
    }

    public function trainingdetails($projects_id)
    {
        $data = array();
        $data['page']        = "trainingdetails";
        $data['about']       = $this->HomeModel->select_about_page_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['membership']  = $this->HomeModel->select_last_membership_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['projects']    = $this->HomeModel->select_last_projects_model_m();
        $data['projectsinfo'] = $this->HomeModel->select_projectsinfo_model_m($projects_id);
        $data['projectsgall'] = $this->HomeModel->select_gallery_projects_model_m($projects_id);
        $data['projectsrelated'] = $this->HomeModel->select_related_projects_model_m($projects_id);

        return view('public/header', $data)
            . view('public/trainingdetails', $data)
            . view('public/footer');
    }

    public function contactinfo()
    {
        $data = array();
        $data['page']   = "contactus";
        $data['about']  = $this->HomeModel->select_about_page_model_m();
        $data['faq']    = $this->HomeModel->select_faq_page_model_m();
        $data['faqq']   = $this->HomeModel->select_last_faq_model_m();
        $data['projectss']  = $this->HomeModel->select_last_projectss_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['newsl']        = $this->HomeModel->select_last_newss_model_m();
        $data['servicess']   = $this->HomeModel->select_last_servicess_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
        $data['items']  = $this->HomeModel->select_last_items_model_m();
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();

        return view('public/header', $data)
            . view('public/contactus', $data)
            . view('public/footer');
    }

    public function send_mail()
    {
        helper(['form']);

        $from_email = "no-reply@sdg-lb.com"; // your domain email
        $to_email   = "sdg@sdg-lb.com";     // where you want to receive messages
        $subject    = $this->request->getPost('subject');
        $name       = $this->request->getPost('name');
        $user_email = $this->request->getPost('email');
        $phone      = $this->request->getPost('phone');
        $message    = $this->request->getPost('message');

        $line = "\n";
        $message_body  = "Name: $name $line";
        $message_body .= "Email: $user_email $line";
        $message_body .= "Phone: $phone $line";
        $message_body .= "Message: $line $message";

        // Load email library
        $email = \Config\Services::email();

        $email->setFrom($from_email, 'Website Contact Form');
        $email->setTo($to_email);
        $email->setReplyTo($user_email, $name); // so you can just hit reply
        $email->setSubject($subject);
        $email->setMessage($message_body);

        if ($email->send()) {
            session()->setFlashdata('success', 'Your message has been sent successfully.');
        } else {
            session()->setFlashdata('error', $email->printDebugger(['headers']));
        }

        return redirect()->to(site_url('home/contactinfo'));
    }



    public function searchresult()
    {
        $data = array();
        $data['page']        = "searchresult";
        $data['allcats']     = $this->HomeModel->select_all_categorys_model_m();
        $data['allsubcats']  = $this->HomeModel->select_all_sub_categorys_model_m();
        $data['services']    = $this->HomeModel->select_last_services_model_m();
        $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
        $data['partner']      = $this->HomeModel->select_last_partner_model_m();
        $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

        $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
        $data['results_products'] = $this->HomeModel->search_products_m($searchTerm);
        // $data['results_projects'] = $this->HomeModel->search_project_m($searchTerm);
        $data['searchTerm']       = $searchTerm;

        return view('public/header', $data)
            . view('public/search_results', $data)
            . view('public/footer');
    }
}
