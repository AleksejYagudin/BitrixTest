<?php

namespace Aclips\BookRental\Internal;

use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\StringField;
use Bitrix\Main\ORM\Fields\TextField;

class EditionTable extends DataManager
{
    public static function getTableName()
    {
        return "a_bookrental_editions";
    }

    public static function getMap()
    {
        return [
            (new IntegerField('ID'))
                ->configurePrimary()
                ->configureAutocomplete(),

            (new StringField('NAME'))
                ->configureRequired(),

            (new IntegerField('PUBLISHING_YEAR'))
                ->configureRequired(),

            (new IntegerField('PUBLISHING_HOUSE_ID'))
                ->configureRequired(),

            (new IntegerField('GENRE_ID'))
                ->configureRequired(),

            (new IntegerField('BOOK_COVER_ID')),

            (new TextField('DESCRIPTION')),
        ];
    }
}