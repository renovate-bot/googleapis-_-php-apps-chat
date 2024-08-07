<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/attachment.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to get an attachment.
 *
 * Generated from protobuf message <code>google.chat.v1.GetAttachmentRequest</code>
 */
class GetAttachmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the attachment, in the form
     * `spaces/{space}/messages/{message}/attachments/{attachment}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Resource name of the attachment, in the form
     *                     `spaces/{space}/messages/{message}/attachments/{attachment}`. Please see
     *                     {@see ChatServiceClient::attachmentName()} for help formatting this field.
     *
     * @return \Google\Apps\Chat\V1\GetAttachmentRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name of the attachment, in the form
     *           `spaces/{space}/messages/{message}/attachments/{attachment}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Attachment::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the attachment, in the form
     * `spaces/{space}/messages/{message}/attachments/{attachment}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the attachment, in the form
     * `spaces/{space}/messages/{message}/attachments/{attachment}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

