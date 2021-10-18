<?php

namespace App\Http\Livewire;

use App\Models\Registration;
use Livewire\Component;

class Register extends Component
{
    public $currentStep = 1;

    public $contactName;

    public $procedures;

    public $selectedProcedure;

    public $selectedTime;

    public $selectedPurpose;

    public $selectedSong;

    public $customerName;

    public $customerPhone;

    public $customerEmail;

    public $hasErrors = false;

    public $errorMessages = [];

    public function render()
    {
        return view('livewire.register');
    }

    public function next($step)
    {
        if ($this->currentStep > 3) {
            return false;
        }

        if ($this->currentStep > $step) {
            $this->hasErrors = false;
            $this->currentStep = $step;
        } else {
            if ($this->currentStep == 1) {
                if (empty($this->selectedProcedure) || empty($this->selectedTime)) {
                    $this->hasErrors = true;

                    $this->errorMessages = [
                        'selectedProcedure' => empty($this->selectedProcedure) ? __('Paslauga') : false,
                        'selectedTime' => empty($this->selectedTime) ? __('Vizito laikas') : false,
                    ];

                    return false;
                }
            }

            if ($this->currentStep == 2) {
                if (empty($this->selectedPurpose) || empty($this->customerName) || empty($this->customerPhone)) {
                    $this->hasErrors = true;

                    $this->errorMessages = [
                        'selectedPurpose' => empty($this->selectedPurpose) ? __('Vizito tikslas') : false,
                        'customerName' => empty($this->customerName) ? __('Vardas Pavardė') : false,
                        'customerPhone' => empty($this->customerPhone) ? __('Telefonas') : false,
                    ];

                    return false;
                }
            }
        }

        if ($this->currentStep + 1 == $step) {
            $this->hasErrors = false;
            $this->currentStep = $step;

            if ($step == 4) {
                $this->save_data();
                $this->submit_data();
            }
        }
    }

    protected function save_data(): void
    {
        Registration::create([
            'new_client' => $this->is_new_client(),
            'customer_name' => $this->customerName,
            'customer_phone' => $this->customerPhone,
            'customer_email' => $this->customerEmail,
            'selected_procedure' => $this->selectedProcedure,
            'selected_time' => $this->selectedTime,
            'selected_purpose' => $this->selectedPurpose,
            'comments' => $this->selectedSong,
        ]);
    }

    protected function submit_data(): void
    {
        $curl = curl_init();

        $data = json_encode([
            'toTop' => true,
            'cells' => [
                [
                    'columnId' => '3227567833540484',
                    'value' => $this->is_new_client() ? 'Ne' : 'Taip',
                ],
                [
                    'columnId' => '7731167460910980',
                    'value' => $this->customerName,
                ],
                [
                    'columnId' => '2101667926697860',
                    'value' => $this->customerPhone,
                ],
                [
                    'columnId' => '6605267554068356',
                    'value' => $this->selectedProcedure,
                ],
                [
                    'columnId' => '4353467740383108',
                    'value' => $this->selectedTime,
                ],
                [
                    'columnId' => '8857067367753604',
                    'value' => $this->selectedPurpose,
                ],
                [
                    'columnId' => '5062963051685764',
                    'value' => "Norima daina: {$this->selectedSong}",
                ],
            ],
        ]);

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://api.smartsheet.com/2.0/sheets/937798141273988/rows',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer 0c8qls79plgo1fpm4jpnmt71sy',
                'Content-Type: application/json'
            ],
        ]);

        curl_exec($curl);

        curl_close($curl);
    }

    protected function is_new_client(): bool
    {
        return $this->selectedPurpose == 'Esu naujas (-a) pacientas (-ė)';
    }
}
