<?php

class ReservationForm
{
    private string $name;
    private string $email;
    private string $reservationDatetime;
    private string $guests;
    private string $note;
    private string $error = '';

    public function __construct(array $data)
    {
        $this->name = trim($data['meno'] ?? '');
        $this->email = trim($data['email'] ?? '');
        $this->reservationDatetime = trim($data['datum_cas'] ?? '');
        $this->guests = trim($data['pocet_osob'] ?? '');
        $this->note = trim($data['sprava'] ?? '');
    }

    public function isValid(): bool
    {
        if (
            $this->name === '' ||
            $this->email === '' ||
            $this->reservationDatetime === '' ||
            $this->guests === ''
        ) {
            $this->error = 'Prosím vyplňte všetky povinné polia.';
            return false;
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->error = 'Zadajte platný email.';
            return false;
        }

        if (!is_numeric($this->guests) || (int)$this->guests < 1) {
            $this->error = 'Počet osôb musí byť kladné číslo.';
            return false;
        }

        return true;
    }

    public function getError(): string
    {
        return $this->error;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getReservationDatetime(): string
    {
        return $this->reservationDatetime;
    }

    public function getGuests(): string
    {
        return $this->guests;
    }

    public function getGuestsAsInt(): int
    {
        return (int)$this->guests;
    }

    public function getNote(): string
    {
        return $this->note;
    }
}