<?php

use App\Models\Bank_Account;
use App\Models\Consignee;
use App\Models\Packing_List_Details;
use App\Models\InvDTL;
use App\Models\InvHD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Bank_Account APIs

Route::get('/bankAccount',function(){
    return Bank_Account::all();
});
Route::post('/bankAccount',function(){

    request()->validate([
        'Account_Name' => 'required',
        'Account_no' => 'required',
        'Bank' => 'required',
        'Branch' => 'required',
        'SwiftCode' => 'required',
        'CorrespondingBank' => 'required',
    ]);
    return Bank_Account::create([
        'Account_Name' => request('Account_Name'),
        'Account_no' => request('Account_no'),
        'Bank' => request('Bank'),
        'Branch' => request('Branch'),
        'SwiftCode' => request('SwiftCode'),
        'CorrespondingBank' => request('CorrespondingBank')
    ]);
});
Route::put('/bankAccount/{id}',function($id){
    $bankAccount = Bank_Account::findorfail($id);
    $bankAccount->update([
        'Account_Name' => request('Account_Name'),
        'Account_no' => request('Account_no'),
        'Bank' => request('Bank'),
        'Branch' => request('Branch'),
        'SwiftCode' => request('SwiftCode'),
        'CorrespondingBank' => request('CorrespondingBank')
    ]);
});
Route::delete('/bankAccount/{id}', function($id){
    $bankAccount = Bank_Account::findorfail($id);
    $bankAccount->delete();
});

//Consignee APIs

Route::get('/consignee',function(){
    return Consignee::all();
});
Route::post('/consignee',function(){

    request()->validate([
        'InvNo' => 'required',
        'ConsigneeId' => 'required',
        'PlNo' => 'required',
        'InvTerm' => 'required',
        'GrossVlue' => 'required',
        'FrieghtValue' => 'required',
        'FreightRate' => 'required',
        'DiscountRate' => 'required',
        'Discount_Value' => 'required',
        'NetTotal' => 'required',
    ]);
    return Consignee::create([
        'InvNo' => request('InvNo'),
        'ConsigneeId' => request('ConsigneeId'),
        'PlNo' => request('PlNo'),
        'InvTerm' => request('InvTerm'),
        'GrossVlue' => request('GrossVlue'),
        'FrieghtValue' => request('FrieghtValue'),
        'FreightRate' => request('FreightRate'),
        'DiscountRate' => request('DiscountRate'),
        'Discount_Value' => request('Discount_Value'),
        'NetTotal' => request('NetTotal')
    ]);
});
Route::put('/consignee/{id}',function($id){
    $consignee = Consignee::findorfail($id);
    $consignee->update([
        'InvNo' => request('InvNo'),
        'ConsigneeId' => request('ConsigneeId'),
        'PlNo' => request('PlNo'),
        'InvTerm' => request('InvTerm'),
        'GrossVlue' => request('GrossVlue'),
        'FrieghtValue' => request('FrieghtValue'),
        'FreightRate' => request('FreightRate'),
        'DiscountRate' => request('DiscountRate'),
        'Discount_Value' => request('Discount_Value'),
        'NetTotal' => request('NetTotal')
    ]);
});
Route::delete('/consignee/{id}', function($id){
    $consignee = Consignee::findorfail($id);
    $consignee->delete();
});


//InvDTL APIs

Route::get('/invdtl',function(){
    return InvDTL::all();
});
Route::post('/invdtl',function(){
    request()->validate([
        'No' => 'required',
        'InvNo' => 'required',
        'Item_Id' => 'required',
        'Item_Description' => 'required',
        'NoofBoxes' => 'required',
        'GrossWgt' => 'required',
        'UnitPrice' => 'required',
        'UnitValue' => 'required',
        
    ]);
    return InvDTL::create([
        'No' => request('No'),
        'InvNo' => request('InvNo'),
        'Item_Id' => request('Item_Id'),
        'Item_Description' => request('Item_Description'),
        'NoofBoxes' => request('NoofBoxes'),
        'GrossWgt' => request('GrossWgt'),
        'UnitPrice' => request('UnitPrice'),
        'UnitValue' => request('UnitValue'),
        
    ]);
});
Route::put('/invdtl/{id}',function($id){
    $invDTLs = InvDTL::findorfail($id);
    $invDTLs->update([
        'No' => request('No'),
        'InvNo' => request('InvNo'),
        'Item_Id' => request('Item_Id'),
        'Item_Description' => request('Item_Description'),
        'NoofBoxes' => request('NoofBoxes'),
        'GrossWgt' => request('GrossWgt'),
        'UnitPrice' => request('UnitPrice'),
        'UnitValue' => request('UnitValue'),
    ]);
});
Route::delete('/invdtl/{id}', function($id){
    $invDTLs = InvDTL::findorfail($id);
    $invDTLs->delete();
});


//InvHD APIs

Route::get('/invhd',function(){
    return InvHD::all();
});
Route::post('/invhd',function(){
    
    request()->validate([
        'InvNo' => 'required',
        'ConsigneeId' => 'required',
        'PlNo' => 'required',
        'InvTerm' => 'required',
        'GrossVlue' => 'required',
        'Total_Gross_Wgt' => 'required',
        'FreightRate' => 'required',
        'FrieghtValue' => 'required',
        'DiscountRate' => 'required',
        'Discount_Value' => 'required',
        'NetTotal' => 'required',
    ]);
    return InvHD::create([
        'InvNo' => request('InvNo'),
        'ConsigneeId' => request('ConsigneeId'),
        'PlNo' => request('PlNo'),
        'InvTerm' => request('InvTerm'),
        'GrossVlue' => request('GrossVlue'),
        'Total_Gross_Wgt' => request('Total_Gross_Wgt'),
        'FreightRate' => request('FreightRate'),
        'FrieghtValue' => request('FrieghtValue'),
        'DiscountRate' => request('DiscountRate'),
        'Discount_Value' => request('Discount_Value'),
        'NetTotal' => request('NetTotal'),
    ]);
});
Route::put('/invhd/{id}',function($id){
    $invhd = InvHD::findorfail($id);
    $invhd->update([
        'InvNo' => request('InvNo'),
        'ConsigneeId' => request('ConsigneeId'),
        'PlNo' => request('PlNo'),
        'InvTerm' => request('InvTerm'),
        'GrossVlue' => request('GrossVlue'),
        'Total_Gross_Wgt' => request('Total_Gross_Wgt'),
        'FreightRate' => request('FreightRate'),
        'FrieghtValue' => request('FrieghtValue'),
        'DiscountRate' => request('DiscountRate'),
        'Discount_Value' => request('Discount_Value'),
        'NetTotal' => request('NetTotal'),
    ]);
});
Route::delete('/invhd/{id}', function($id){
    $invhd = InvHD::findorfail($id);
    $invhd->delete();
});

//Packing_List_Details APIs

Route::get('/packinglistdetails',function(){
    return Packing_List_DTL::all();
});
Route::post('/packinglistdetails',function(){
    
    request()->validate([
        'PlNo' => 'required',
        'Item_Id' => 'required',
        'Item_Description' => 'required',
        'NoofBoxes' => 'required',
        'GrossTotal' => 'required',
        'NetTotal' => 'required',
    ]);
    return Packing_List_DTL::create([
        'PlNo' => request('PlNo'),
        'Item_Id' => request('Item_Id'),
        'Item_Description' => request('Item_Description'),
        'NoofBoxes' => request('NoofBoxes'),
        'GrossTotal' => request('GrossTotal'),
        'NetTotal' => request('NetTotal'),
    ]);
});
Route::put('/packinglistdetails/{id}',function($id){
    $packinglistdetails = Packing_List_DTL::findorfail($id);
    $packinglistdetails->update([
        'InvNo' => request('InvNo'),
        'ConsigneeId' => request('ConsigneeId'),
        'PlNo' => request('PlNo'),
        'InvTerm' => request('InvTerm'),
        'GrossVlue' => request('GrossVlue'),
        'Total_Gross_Wgt' => request('Total_Gross_Wgt'),
        'FreightRate' => request('FreightRate'),
        'FrieghtValue' => request('FrieghtValue'),
        'DiscountRate' => request('DiscountRate'),
        'Discount_Value' => request('Discount_Value'),
        'NetTotal' => request('NetTotal'),
    ]);
});
Route::delete('/packinglistdetails/{id}', function($id){
    $packinglistdetails = Packing_List_DTL::findorfail($id);
    $packinglistdetails->delete();
});