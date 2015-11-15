<?php

namespace Acme\DemoTwoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PedidoRepuestos
 */
class PedidoRepuestos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idPedido;

    /**
     * @var integer
     */
    private $idRepuesto;

    /**
     * @var integer
     */
    private $cantidad;


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
     * Set idPedido
     *
     * @param integer $idPedido
     * @return PedidoRepuestos
     */
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * Get idPedido
     *
     * @return integer 
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set idRepuesto
     *
     * @param integer $idRepuesto
     * @return PedidoRepuestos
     */
    public function setIdRepuesto($idRepuesto)
    {
        $this->idRepuesto = $idRepuesto;

        return $this;
    }

    /**
     * Get idRepuesto
     *
     * @return integer 
     */
    public function getIdRepuesto()
    {
        return $this->idRepuesto;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return PedidoRepuestos
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
}
