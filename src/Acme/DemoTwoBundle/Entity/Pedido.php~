<?php

namespace Acme\DemoTwoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 */
class Pedido
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
     * @var boolean
     */
    private $pedidoFinalizado;


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
     * @return Pedido
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
     * Set pedidoFinalizado
     *
     * @param boolean $pedidoFinalizado
     * @return Pedido
     */
    public function setPedidoFinalizado($pedidoFinalizado)
    {
        $this->pedidoFinalizado = $pedidoFinalizado;

        return $this;
    }

    /**
     * Get pedidoFinalizado
     *
     * @return boolean 
     */
    public function getPedidoFinalizado()
    {
        return $this->pedidoFinalizado;
    }
}
