<?php

namespace App\Model;

use App\Helpers\Text;
use DateTime;

class Post
{
    private $id;

    private $name;


    private $content;

    private $slug;

    private $createdAt;

    private $categories = [];

    public function getName(): ?string
    {
        return htmlentities($this->name);
    }

    public function getExcerpt(): ?string
    {
        if ($this->content === null) {
            return null;
        }
        return htmlentities(Text::excerpt($this->content));
    }

    public function getCreatedAt(): DateTime
    {
        return new DateTime($this->createdAt);
    }

    public function getID(): ?int
    {
        return $this->id;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }
}
