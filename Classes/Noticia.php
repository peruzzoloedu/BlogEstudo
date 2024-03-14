<?php

class noticia
{
    private int $id;
    private String $Noticia;
    private String $titulo;
    private String $subtitulo;
    private String $image;
    private String $created_at;
    private String $update_at;

    public function getIdNoticia()
    {
        return $this->Noticia;
    }

    public function setIdNoticia($idNoticia)
    {
        $this->Noticia = $idNoticia;

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

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
