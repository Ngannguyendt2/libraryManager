<?php


class Books
{
private $id;
private $code_book;
private $name;
private $publishingCompany;
private $author_id;
private $publishingYear;
private $numOfEdit;
private $price;
private $img;
private $category_id;
private $status;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->author_id;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @return mixed
     */
    public function getCodeBook()
    {
        return $this->code_book;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @return mixed
     */
    public function getNumOfEdit()
    {
        return $this->numOfEdit;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getPublishingCompany()
    {
        return $this->publishingCompany;
    }

    /**
     * @return mixed
     */
    public function getPublishingYear()
    {
        return $this->publishingYear;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $author_id
     */
    public function setAuthorId($author_id)
    {
        $this->author_id = $author_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @param mixed $code_book
     */
    public function setCodeBook($code_book)
    {
        $this->code_book = $code_book;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @param mixed $numOfEdit
     */
    public function setNumOfEdit($numOfEdit)
    {
        $this->numOfEdit = $numOfEdit;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $publishingCompany
     */
    public function setPublishingCompany($publishingCompany)
    {
        $this->publishingCompany = $publishingCompany;
    }

    /**
     * @param mixed $publishingYear
     */
    public function setPublishingYear($publishingYear)
    {
        $this->publishingYear = $publishingYear;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}