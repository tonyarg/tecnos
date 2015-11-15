<?php

namespace Acme\DemoTwoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModificacionesRepuesto
 */
class ModificacionesRepuesto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idTransaccion;

    /**
     * @var string
     */
    private $codigoAntiguo;

    /**
     * @var string
     */
    private $codigoNuevo;

    /**
     * @var string
     */
    private $nombreAntiguo;

    /**
     * @var string
     */
    private $nombreNuevo;

    /**
     * @var float
     */
    private $precioCompraAntiguo;

    /**
     * @var float
     */
    private $precioCompraNuevo;

    /**
     * @var float
     */
    private $precioVentaAntiguo;

    /**
     * @var float
     */
    private $precioVentaNuevo;

    /**
     * @var integer
     */
    private $porcentajeGananciaAntiguo;

    /**
     * @var integer
     */
    private $porcentajeGananciaNuevo;

    /**
     * @var integer
     */
    private $cantidadAntiguo;

    /**
     * @var integer
     */
    private $cantidadNuevo;

    /**
     * @var integer
     */
    private $categoriaAntiguo;

    /**
     * @var integer
     */
    private $categoriaNuevo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTransaccion
     *
     * @param integer $idTransaccion
     * @return ModificacionesRepuesto
     */
    public function setIdTransaccion($idTransaccion)
    {
        $this->idTransaccion = $idTransaccion;

        return $this;
    }

    /**
     * Get idTransaccion
     *
     * @return integer 
     */
    public function getIdTransaccion()
    {
        return $this->idTransaccion;
    }

    /**
     * Set codigoAntiguo
     *
     * @param string $codigoAntiguo
     * @return ModificacionesRepuesto
     */
    public function setCodigoAntiguo($codigoAntiguo)
    {
        $this->codigoAntiguo = $codigoAntiguo;

        return $this;
    }

    /**
     * Get codigoAntiguo
     *
     * @return string 
     */
    public function getCodigoAntiguo()
    {
        return $this->codigoAntiguo;
    }

    /**
     * Set codigoNuevo
     *
     * @param string $codigoNuevo
     * @return ModificacionesRepuesto
     */
    public function setCodigoNuevo($codigoNuevo)
    {
        $this->codigoNuevo = $codigoNuevo;

        return $this;
    }

    /**
     * Get codigoNuevo
     *
     * @return string 
     */
    public function getCodigoNuevo()
    {
        return $this->codigoNuevo;
    }

    /**
     * Set nombreAntiguo
     *
     * @param string $nombreAntiguo
     * @return ModificacionesRepuesto
     */
    public function setNombreAntiguo($nombreAntiguo)
    {
        $this->nombreAntiguo = $nombreAntiguo;

        return $this;
    }

    /**
     * Get nombreAntiguo
     *
     * @return string 
     */
    public function getNombreAntiguo()
    {
        return $this->nombreAntiguo;
    }

    /**
     * Set nombreNuevo
     *
     * @param string $nombreNuevo
     * @return ModificacionesRepuesto
     */
    public function setNombreNuevo($nombreNuevo)
    {
        $this->nombreNuevo = $nombreNuevo;

        return $this;
    }

    /**
     * Get nombreNuevo
     *
     * @return string 
     */
    public function getNombreNuevo()
    {
        return $this->nombreNuevo;
    }

    /**
     * Set precioCompraAntiguo
     *
     * @param float $precioCompraAntiguo
     * @return ModificacionesRepuesto
     */
    public function setPrecioCompraAntiguo($precioCompraAntiguo)
    {
        $this->precioCompraAntiguo = $precioCompraAntiguo;

        return $this;
    }

    /**
     * Get precioCompraAntiguo
     *
     * @return float 
     */
    public function getPrecioCompraAntiguo()
    {
        return $this->precioCompraAntiguo;
    }

    /**
     * Set precioCompraNuevo
     *
     * @param float $precioCompraNuevo
     * @return ModificacionesRepuesto
     */
    public function setPrecioCompraNuevo($precioCompraNuevo)
    {
        $this->precioCompraNuevo = $precioCompraNuevo;

        return $this;
    }

    /**
     * Get precioCompraNuevo
     *
     * @return float 
     */
    public function getPrecioCompraNuevo()
    {
        return $this->precioCompraNuevo;
    }

    /**
     * Set precioVentaAntiguo
     *
     * @param float $precioVentaAntiguo
     * @return ModificacionesRepuesto
     */
    public function setPrecioVentaAntiguo($precioVentaAntiguo)
    {
        $this->precioVentaAntiguo = $precioVentaAntiguo;

        return $this;
    }

    /**
     * Get precioVentaAntiguo
     *
     * @return float 
     */
    public function getPrecioVentaAntiguo()
    {
        return $this->precioVentaAntiguo;
    }

    /**
     * Set precioVentaNuevo
     *
     * @param float $precioVentaNuevo
     * @return ModificacionesRepuesto
     */
    public function setPrecioVentaNuevo($precioVentaNuevo)
    {
        $this->precioVentaNuevo = $precioVentaNuevo;

        return $this;
    }

    /**
     * Get precioVentaNuevo
     *
     * @return float 
     */
    public function getPrecioVentaNuevo()
    {
        return $this->precioVentaNuevo;
    }

    /**
     * Set porcentajeGananciaAntiguo
     *
     * @param integer $porcentajeGananciaAntiguo
     * @return ModificacionesRepuesto
     */
    public function setPorcentajeGananciaAntiguo($porcentajeGananciaAntiguo)
    {
        $this->porcentajeGananciaAntiguo = $porcentajeGananciaAntiguo;

        return $this;
    }

    /**
     * Get porcentajeGananciaAntiguo
     *
     * @return integer 
     */
    public function getPorcentajeGananciaAntiguo()
    {
        return $this->porcentajeGananciaAntiguo;
    }

    /**
     * Set porcentajeGananciaNuevo
     *
     * @param integer $porcentajeGananciaNuevo
     * @return ModificacionesRepuesto
     */
    public function setPorcentajeGananciaNuevo($porcentajeGananciaNuevo)
    {
        $this->porcentajeGananciaNuevo = $porcentajeGananciaNuevo;

        return $this;
    }

    /**
     * Get porcentajeGananciaNuevo
     *
     * @return integer 
     */
    public function getPorcentajeGananciaNuevo()
    {
        return $this->porcentajeGananciaNuevo;
    }

    /**
     * Set cantidadAntiguo
     *
     * @param integer $cantidadAntiguo
     * @return ModificacionesRepuesto
     */
    public function setCantidadAntiguo($cantidadAntiguo)
    {
        $this->cantidadAntiguo = $cantidadAntiguo;

        return $this;
    }

    /**
     * Get cantidadAntiguo
     *
     * @return integer 
     */
    public function getCantidadAntiguo()
    {
        return $this->cantidadAntiguo;
    }

    /**
     * Set cantidadNuevo
     *
     * @param integer $cantidadNuevo
     * @return ModificacionesRepuesto
     */
    public function setCantidadNuevo($cantidadNuevo)
    {
        $this->cantidadNuevo = $cantidadNuevo;

        return $this;
    }

    /**
     * Get cantidadNuevo
     *
     * @return integer 
     */
    public function getCantidadNuevo()
    {
        return $this->cantidadNuevo;
    }

    /**
     * Set categoriaAntiguo
     *
     * @param integer $categoriaAntiguo
     * @return ModificacionesRepuesto
     */
    public function setCategoriaAntiguo($categoriaAntiguo)
    {
        $this->categoriaAntiguo = $categoriaAntiguo;

        return $this;
    }

    /**
     * Get categoriaAntiguo
     *
     * @return integer 
     */
    public function getCategoriaAntiguo()
    {
        return $this->categoriaAntiguo;
    }

    /**
     * Set categoriaNuevo
     *
     * @param integer $categoriaNuevo
     * @return ModificacionesRepuesto
     */
    public function setCategoriaNuevo($categoriaNuevo)
    {
        $this->categoriaNuevo = $categoriaNuevo;

        return $this;
    }

    /**
     * Get categoriaNuevo
     *
     * @return integer 
     */
    public function getCategoriaNuevo()
    {
        return $this->categoriaNuevo;
    }
}
