<?php

namespace App;

class Invoice
{
    public function __construct(public float $amount, public string $name, public string $desc, public string $creditCardNr)
    {
    }

    public function __sleep(): array
    {
        //called before the serialization happens

        //here it will only serialize the amount. This array can only be properties or methods of the object
        return ['amount'];
    }

    public function __wakeup(): void
    {
        //called after object has been unserialized
    }

    public function __serialize(): array
    {
        //called before serialization, but serialize must return an array that represents the object
        //can also have more data than just the properties

        //if serialize and sleep methods are defined: serialize will be called instead of sleep

        return [
            'name' => $this->name,
            'amount' => $this->amount,
            'desc' => $this->desc,
            'creditCardNr' => base64_encode($this->creditCardNr),
            'foo' => 'bar'
        ];
    }

    public function __unserialize(array $data): void
    {
        //called after object has been unserialized
        //gets the data that was serialized. Can restore the data of the object

        $this->amount = $data['amount'];
        $this->name = $data['name'];
        $this->desc = $data['desc'];
        $this->creditCardNr = base64_decode($data['creditCardNr']);
    }
}