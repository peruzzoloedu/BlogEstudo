<?php

class noticia
{

    private int $idNoticia;
    private String $titulo;
    private String $subtitulo;
    private String $image;
    private String $created_at;
    private String $update_at;

    public function getIdNoticia()
    {
        return $this->idNoticia;
    }

    public function setIdNoticia($idNoticia)
    {
        $this->idNoticia = $idNoticia;

        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

    public function setSubtitulo($subtitulo)
    {
        $this->subtitulo = $subtitulo;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdate_at()
    {
        return $this->update_at;
    }

    public function setUpdate_at($update_at)
    {
        $this->update_at = $update_at;

        return $this;
    }
}
