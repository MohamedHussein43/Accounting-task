<?php

namespace App\Http\Livewire;
use App\Models\AccountingPanal;
use Livewire\Component;

class AccountingPanalComponent extends Component
{
    public $Owners;
    public $Admin_total;
    public $selected_Owner = null;
    public $CurrentOwner;
    public $CurrentOwner_name;
    public $CurrentOwner_service;
    public $CurrentOwner_tax;
    public $CurrentOwner_admin_tax;
    public $CurrentOwner_initial_price;
    public $CurrentOwner_total_revinue;
    public $CurrentOwner_admin_total_revinue;
    public $CurrentOwner_tax_type;
    public $CurrentOwner_admin_tax_type;
    public $ownerData;
    public $num1;
    public $num2;
    public $sum = 0;
    public $data = array();
    public function mount() {
        $this->Owners = AccountingPanal::all();
        $this->ownerData = AccountingPanal::all();
        $this->CurrentOwner = 0;
        $this->CurrentOwner_name = "";
        $this->CurrentOwner_service = "";
        $this->CurrentOwner_initial_price = "";
        $this->CurrentOwner_total_revinue = "";
        $this->CurrentOwner_admin_total_revinue = "";
        $this->CurrentOwner_tax = "";
        $this->CurrentOwner_admin_tax = "";
        $this->CurrentOwner_tax_type = "";
        $this->CurrentOwner_admin_tax_type = "";
        $this->Admin_total = AccountingPanal::sum('total_admin_revenue');
    }
    public function add(){
        $this->sum = $this->num1 + $this->num2;
    }
    private function calculateTotalRevinue(){
        if ($this->CurrentOwner_tax_type == 0){
            if($this->CurrentOwner_admin_tax_type == 0){
                $this->CurrentOwner_total_revinue =$this->data['initial_price'] - $this->CurrentOwner_admin_tax - $this->CurrentOwner_tax;
            }
            else{
                $this->CurrentOwner_total_revinue =$this->data['initial_price'] - ($this->data['initial_price']*$this->CurrentOwner_admin_tax/100) - $this->CurrentOwner_tax;
            }
        }
        else{
            if($this->CurrentOwner_admin_tax_type == 0){
                $this->CurrentOwner_total_revinue =$this->data['initial_price'] - $this->CurrentOwner_admin_tax - ($this->data['initial_price']*$this->CurrentOwner_tax/100);
            }
            else{
                $this->CurrentOwner_total_revinue =$this->data['initial_price'] - ($this->data['initial_price']*$this->CurrentOwner_admin_tax/100) - ($this->data['initial_price']*$this->CurrentOwner_tax/100);
            }
        }
    }
    private function calculateTotalAdminRevinue(){
       
            if($this->CurrentOwner_admin_tax_type == 0){
                $this->CurrentOwner_admin_total_revinue = $this->CurrentOwner_admin_tax;
            }
            else{
                $this->CurrentOwner_admin_total_revinue = ($this->data['initial_price']*$this->CurrentOwner_admin_tax/100);
            }
        
    }
    public function saveToDatabase()
    {
        // Assuming you have a model named YourModel
        if($this->CurrentOwner == 1){
            AccountingPanal::where('id', $this->data['id'])->update([
                'initial_price' => $this->CurrentOwner_initial_price,
                'tax_type' => $this->CurrentOwner_tax_type,
                'tax' => $this->CurrentOwner_tax,
                'admin_tax_type' => $this->CurrentOwner_admin_tax_type,
                'admin_tax' => $this->CurrentOwner_admin_tax,
                'total_owner_revenue' => $this->CurrentOwner_total_revinue,
                'total_admin_revenue' => $this->CurrentOwner_admin_total_revinue,
                // Add other fields as needed
            ]);
         }
         // Reset the Livewire component state
        $this->reset();
        $this->mount();
        // Trigger a full-page refresh
        $this->emit('$refresh');

        // You may also retrieve the updated data from the database if needed
        // $updatedData = YourModel::find($yourId);

        // Optional: Add any additional logic after saving to the database
    }


    public function updatedCurrentOwnerTax(){
        $this->calculateTotalRevinue();
        
    }
    public function updatedCurrentOwnerAdminTax(){
        $this->calculateTotalAdminRevinue();
        $this->calculateTotalRevinue();
    }

    public function updatedCurrentOwnerTaxType(){
        $this->calculateTotalRevinue();
        
    }
    public function updatedCurrentOwnerAdminTaxType(){
        $this->calculateTotalAdminRevinue();
        $this->calculateTotalRevinue();
    }
    /*public function updatedCurrentOwnerTotalRevinue(){
        $this->CurrentOwner_initial_price = 2;
    }*/
    public function updatedCurrentOwnerInitialPrice(){
        $this->data['initial_price'] = $this->CurrentOwner_initial_price;
        $this->calculateTotalRevinue();
    }

    public function curantOwner($data){
        $this->CurrentOwner = 1;
        $this->data = $data;
        $this->CurrentOwner_name = $data["owner_name"];
        $this->CurrentOwner_service = $data["service_name"];
        $this->CurrentOwner_initial_price = $data['initial_price'];
        $this->CurrentOwner_total_revinue = $data['total_owner_revenue'];
        $this->CurrentOwner_tax = $data['tax'];
        $this->CurrentOwner_admin_tax = $data['admin_tax'];
        $this->CurrentOwner_tax_type = $data['tax_type'];
        $this->CurrentOwner_admin_tax_type = $data['admin_tax_type'];
        $this->CurrentOwner_admin_total_revinue = $data['total_admin_revenue'];
    }

    public function render()
    {
        //dump($this->CurrentOwner_name);
        
        return view('livewire.accounting-panal-component')->layout('layouts.base');
    }
}
