<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: maskas
 * Date: 16.2.28
 * Time: 21.33
 */

namespace Plugin\DoctrineExample\Entity;

/**
 * @Entity @Table(name="ip_product")
 **/
class Product
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(name="title", type="string") **/
    protected $title;

    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
