<?php
declare(strict_types=1);
namespace ShopProduct\Info;

class BookInfo extends BaseInfo
{
    /**
     * @inheritDoc
     */
    protected function getAdditionalInfo(): string
    {
        return "кількість сторінок: {$this->shopProduct->getPagesCount()}";
    }
}
