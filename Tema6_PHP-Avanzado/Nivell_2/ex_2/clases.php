<?php
declare(strict_types = 1);

class Padre {
    protected $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function __toString(): string
    {
        return "Objeto de clase padre de nombre '" . $this->nombre . "', este mensaje se produce con el metodo '__toString() original. <br>";
    }
}

class Hija extends Padre {
    public function __toString(): string
    {
        return "Objeto de clase hija de nombre '" . $this->nombre . "', este mensaje se produce con el metodo '__toString() sobreescrito. <br>";
    }
}

?>