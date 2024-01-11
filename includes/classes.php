<?php

class ServiceItem
{
    public $title;
    public $desc;
    public $img;
    public $link;
}

class ServicesCarousel
{
    private $serviceItems = [];

    public function addServiceItem(ServiceItem $serviceItem)
    {
        $this->serviceItems[] = $serviceItem;
    }

    public function getServices()
    {
        $html = '';
        foreach ($this->serviceItems as $serviceItem) {
            $html .= '<div class="service-item position-relative">';
            $html .= '<img class="img-fluid" '.img($serviceItem->img).'>';
            $html .= '<div class="service-text text-center">';
            $html .= '<h4 class="text-white font-weight-medium px-3">' . $serviceItem->title . '</h4>';
            $html .= '<p class="text-white px-3 mb-3">' . $serviceItem->desc . '</p>';
            $html .= '<div class="w-100 bg-white text-center p-4">';
            $html .= '<a class="btn btn-primary" href="' . $serviceItem->link . '" target="_blank">Details</a>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }
        return $html;
    }
}


class ServicesCard
{
    private $serviceItems = [];

    public function addServiceItem(ServiceItem $serviceItem)
    {
        $this->serviceItems[] = $serviceItem;
    }

    public function getServices()
    {
        $html = '';
        foreach ($this->serviceItems as $serviceItem) {
            // $html .= '<div class="col-md-3 mb-4">';
            // $html .= '<div class="card">';
            // $html .= '<div class="card-header">';
            $html .= '- '.$serviceItem->title."<br>";
            // $html .= '</div>';
            // $html .= '<div class="card-body">';
            // $html .= '<h5 class="card-title"> </h5>';
            // $html .= '<p class="card-text">' . $serviceItem->desc . '</p>';
            // $html .= '<a href="' . $serviceItem->link . '" class="btn btn-primary">Details</a>';
            // $html .= '</div>';
            // $html .= '</div>';
            // $html .= '</div>';
        }
        return $html;
    }
}