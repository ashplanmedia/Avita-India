<?php

namespace App\Http\Controllers;

use App\ASPAPIService;
use App\Product;
use App\ProductModel;
use App;
use App\Shop;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    protected function productFromURL($country, $slug ) {
        $country = 'in';
        $product = Product::whereCountry($country)->where('short_code', $slug)->first();

        // Fallback..
        if ( !$product ) {
            $product = Product::where('short_code', $slug)->first();
        }

        return $product;
    }

    public function showProductFeatures( $slug) {
        $country = 'in';
        $product = $this->productFromURL($country, $slug);
        if ( $slug == 'magus12-2in1-laptop' ) {
            if ( $country == 'sg' ) {
                return view('product.magus_sg', compact( 'product'));
            } elseif ( $country == 'id' ) {
                return view('product.magus_id', compact( 'product'));
            } else {
                return view('product.magus', compact( 'product'));
            }
        }
        if ( $slug == 'magus12-2in1-laptop-c' ) {
            return view('product.magus_tc', compact( 'product'));
        }
        if ( $slug == 'magus-spec' ) {
            if ( $country == 'id' ) {
                return view('product.magus_spec_id', compact( 'product'));
            } else {
                return view('product.magus_spec_hk', compact( 'product'));
            }
        }
        if ( $slug == 'magus-spec-c' ) {
            return view('product.magus_spec_tc', compact( 'product'));
        }

        if ( !$product ) {
            abort(404);
        }

        $view = $product->getFeatureView( );

        if (!$view){
            abort(404);
        }

        return view($view, compact('product'));
    }

    public function showProductSpec( $slug) {
        $country = 'in';
        $product = $this->productFromURL($country, $slug);

        if ( !$product ) {
            abort(404);
        }

        $view = $product->getSpecView( );

        if (!$view){
            abort(404);
        }

        return view($view, compact('product'));
    }

    public function showProductSupport(Request $request, $slug) {
        $country = 'in';
        $product = $this->productFromURL($country, $slug);

        if ( !$product ) {
            abort(404);
        }

//        $product_model = $request->get('model');
//        $product_number =
//        $product_type = $request->get('type');
//        $product_series = $request->get('series');

        $json_data = [
            'product_model' =>  $request->get('model'),
            'product_number' => $request->get('pn'),
            'product_type' => $request->get('type'),
            'product_series' => $request->get('series'),
            'marketing_number' => $request->get('marketing_number')
        ];

        return view('product.support', compact('product', 'slug', 'json_data'));
    }

    public function whereToBuy($slug){
        $country = 'in';

        $product = Product::where('short_code', $slug)->first();

        if ( !$product ) {
            abort(404);
        }

        if ( \App::isLocale('en') ) {
            $query = Shop::select('shops.*')->leftJoin('shop_translations', function ($join) {
                $join->on('shops.id', '=', 'shop_translations.shop_id');
                $join->on('shop_translations.locale', '=', \DB::raw('"en"') );
            })
                ->orderBy('shop_translations.name', 'asc');

        } else {
            $query = Shop::select();
        }
        $query->where('country', $country);

        $query->where('enabled', true);

        $shops = $query->get();

        return view('product.map', compact( 'product', 'shops'));

    }

    public function showDriverComponent(Request $request) {

        $product_number = $request->get('product_number');

        // Get drivers list from asp server.
        $all_drivers = ASPAPIService::getDriversForModelNumber($product_number);

        $total = $all_drivers->reduce(function ( $carry, $item ) {
            return $carry + count( $item );
        });

        if ( !$total ) {
            $total = 0;
        }

        return view('product.drivers', compact('all_drivers', 'total'));
    }

    public function showProductTypes(Request $request) {
        return ASPAPIService::getProductTypes( );
    }

    public function showProductSeries(Request $request) {

        $type = $request->get('type');
        return ASPAPIService::getProductSeries($type);

    }

    public function showProductMarketingNumbers(Request $request) {
        $series = $request->get('series');
        return ASPAPIService::getProductMarketingNumbersBySeries($series);
    }

    public function showProductNumbers(Request $request) {

        if ( $request->has('marketing_number' ) ) {
            return ASPAPIService::getProductNumbersByMarketingNumber( $request->get('marketing_number') );
        } else {
            return ASPAPIService::getProductNumbersByProductSeries( $request->get('series') );
        }https://avita-india.com/product/liber-new-generation



    }

    public static function showProductModels(Request $request) {

        return ASPAPIService::getProductModels( $request->get('product_number'), $request->get('marketing_number') );

    }

}