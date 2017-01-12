<?php

/* This file is generated by the open source Parm Generator. github.com/cassell/Parm */

    namespace app\models;

class MPostDaoObject extends \Parm\DataAccessObject implements MPostTable
{
    use MPostTableFunctions;

        /**
        * Set int(11) field m_post.id in logical database "mvc"
        * @param string|int|null $val
        */
        final function setId($val) { $this->setIntFieldValue(self::ID_COLUMN,$val); }

        /**
        * Get int(11) field m_post.id from logical database "mvc"
        * @return int|null
        */
        final function getId(){ return $this->getIntFieldValue(self::ID_COLUMN); }

        /**
        * Set varchar(500) field m_post.title in logical database "mvc"
        * @param string|null $val
        */
        final function setTitle($val) { $this->setFieldValue(self::TITLE_COLUMN,$val); }

        /**
        * Get varchar(500) field m_post.title from logical database "mvc"
        * @return string|null
        */
        final function getTitle(){ return $this->getFieldValue(self::TITLE_COLUMN); }

        /**
        * Set text field m_post.content in logical database "mvc"
        * @param string|null $val
        */
        final function setContent($val) { $this->setFieldValue(self::CONTENT_COLUMN,$val); }

        /**
        * Get text field m_post.content from logical database "mvc"
        * @return string|null
        */
        final function getContent(){ return $this->getFieldValue(self::CONTENT_COLUMN); }

        /**
        * Set datetime field m_post.created_at in logical database "mvc"
        * @param string|DateTime|int|timestamp $val
        */
        final function setCreatedAt($val) { $this->setDatetimeFieldValue(self::CREATED_AT_COLUMN,$val); }

        /**
        * Get datetime field m_post.created_at from logical database "mvc"
        * @param string $format optional Defaults to MySQL formatted Datetime YYYY-MM-DD HH:MM:SS
        * @return string
        */
        final function getCreatedAt($format = null) { return $this->getDatetimeFieldValue(self::CREATED_AT_COLUMN,$format); }

        /**
        * Get datetime field m_post.created_at from logical database "mvc" as a DateTime object
        * @return DateTime
        */
        final function getCreatedAtDateTimeObject() { return $this->getDatetimeObjectFromField(self::CREATED_AT_COLUMN,$this->getFactory()->databaseNode->getDatetimeStorageFormat()); }

        /**
        * Set tinyint(1) field m_post.status in logical database "mvc"
        * @param string|int|bool|null $val
        */
        final function setStatus($val) { $this->setBooleanFieldValue(self::STATUS_COLUMN,$val); }

        /**
        * Get tinyint(1) field m_post.status from logical database "mvc"
        * @return bool|null
        */
        final function getStatus(){ return $this->getBooleanFieldValue(self::STATUS_COLUMN); }


}
