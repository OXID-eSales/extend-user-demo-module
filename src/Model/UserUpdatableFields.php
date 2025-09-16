<?php

/**
 * Copyright © . All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\ExtendUser\Model;

class UserUpdatableFields extends UserUpdatableFields_parent
{
    protected $fieldsToAdd = [
        UserModel::FIELD_ADDITIONAL_INFORMATION
    ];

    /**
     * Adds additional field which could be updated.
     */
    public function getUpdatableFields()
    {
        $updatableFields = parent::getUpdatableFields();

        return array_merge($updatableFields, $this->fieldsToAdd);
    }
}
