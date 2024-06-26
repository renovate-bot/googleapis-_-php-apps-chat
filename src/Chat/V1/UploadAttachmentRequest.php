<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/attachment.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to upload an attachment.
 *
 * Generated from protobuf message <code>google.chat.v1.UploadAttachmentRequest</code>
 */
class UploadAttachmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the Chat space in which the attachment is
     * uploaded. Format "spaces/{space}".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The filename of the attachment, including the file extension.
     *
     * Generated from protobuf field <code>string filename = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $filename = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the Chat space in which the attachment is
     *           uploaded. Format "spaces/{space}".
     *     @type string $filename
     *           Required. The filename of the attachment, including the file extension.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Attachment::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the Chat space in which the attachment is
     * uploaded. Format "spaces/{space}".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the Chat space in which the attachment is
     * uploaded. Format "spaces/{space}".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The filename of the attachment, including the file extension.
     *
     * Generated from protobuf field <code>string filename = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Required. The filename of the attachment, including the file extension.
     *
     * Generated from protobuf field <code>string filename = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFilename($var)
    {
        GPBUtil::checkString($var, True);
        $this->filename = $var;

        return $this;
    }

}

