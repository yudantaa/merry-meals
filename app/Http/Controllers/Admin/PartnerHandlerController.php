<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partner;
use App\Models\Geolocation;
use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerRequest;
use App\Http\Requests\PartnerUpdateRequest;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;


class PartnerHandlerController extends Controller
{
    public function index()
    {
        return view('admin.list_partner', [
            'data_partners' => Partner::all(),
            'title_page' => 'Partner lists',
            'dashboard_info' => 'Partners Lists',
        ]);
    }

    public function create(Request $req)
    {
        $location = Location::get('https://' . $req->ip()); //dynamic getting ip address
        return view('admin.create_partner', compact('location'), [
            'title_page' => 'Partner Registration',
            'dashboard_info' => 'Create New Partner',
        ]);
    }

    public function store(PartnerRequest $req)
    {
        $partners = $req->validated();
        $partners = new Partner;
        $partners->owner_name = $req->owner_name;
        $partners->restaurant_name = $req->restaurant_name;
        $partners->restaurant_contact = $req->restaurant_contact;
        $partners->restaurant_address = $req->restaurant_address;
        $partners->food_type = $req->food_type;
        $partners->restaurant_image = ($req->hasFile('restaurant_image'))
            ? $req->file('restaurant_image')->store('restaurant-images')
            : back();
        $partners->save();
        $location = Location::get('https://' . $req->ip());  //dynamic ip address
        $partner_geo_loc = new Geolocation;
        $partner_geo_loc->ip = $location->ip;
        $partner_geo_loc->countryName = $location->countryName;
        $partner_geo_loc->countryCode = $location->countryCode;
        $partner_geo_loc->regionCode = $location->regionCode;
        $partner_geo_loc->regionName = $location->regionName;
        $partner_geo_loc->cityName = $location->cityName;
        $partner_geo_loc->zipCode = $location->zipCode;
        $partner_geo_loc->latitude = $location->latitude;
        $partner_geo_loc->longitude = $location->longitude;
        $partner_geo_loc->partner_id = $partners->id;
        $partner_geo_loc->save();
        return to_route('partner_handler.index');
    }

    public function show($id)
    {
        $data_partner = Partner::find($id);
    }

    public function edit($id)
    {
        return view('admin.edit_partner', [
            'partners' => Partner::find($id),
            'dashboard_info' => 'Edit Partner',
            'title_page' => 'Edit Partner'
        ]);
    }

    public function update(PartnerUpdateRequest $req, $id)
    {
        $data_partner = $req->validated();
        $data_partner = Partner::find($id);
        $data_partner->owner_name = $req->owner_name;
        $data_partner->restaurant_name = $req->restaurant_name;
        $data_partner->restaurant_contact = $req->restaurant_contact;
        $data_partner->restaurant_address = $req->restaurant_address;
        $data_partner->food_type = $req->food_type;
        $data_partner->restaurant_image = ($req->hasFile('restaurant_image'))
            ? $req->file('restaurant_image')->store('restaurant-images')
            : back();
        $data_partner->save();
        return to_route('partner_handler.index');
    }

    public function destroy($id)
    {
        $data_partner = Partner::find($id);
        $data_partner->delete();
        return to_route('partner_handler.index');
    }
}