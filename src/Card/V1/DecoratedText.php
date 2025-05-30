<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/card/v1/card.proto

namespace Google\Apps\Card\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A widget that displays text with optional decorations such as a label above
 * or below the text, an icon in front of the text, a selection widget, or a
 * button after the text. For an example in
 * Google Chat apps, see [Display text with decorative
 * text](https://developers.google.com/workspace/chat/add-text-image-card-dialog#display_text_with_decorative_elements).
 * [Google Workspace Add-ons and Chat
 * apps](https://developers.google.com/workspace/extend):
 *
 * Generated from protobuf message <code>google.apps.card.v1.DecoratedText</code>
 */
class DecoratedText extends \Google\Protobuf\Internal\Message
{
    /**
     * Deprecated in favor of `startIcon`.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Icon icon = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $icon = null;
    /**
     * The icon displayed in front of the text.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Icon start_icon = 12;</code>
     */
    protected $start_icon = null;
    /**
     * The text that appears above `text`. Always truncates.
     *
     * Generated from protobuf field <code>string top_label = 3;</code>
     */
    protected $top_label = '';
    /**
     * Required. The primary text.
     * Supports simple formatting. For more information
     * about formatting text, see
     * [Formatting text in Google Chat
     * apps](https://developers.google.com/workspace/chat/format-messages#card-formatting)
     * and
     * [Formatting
     * text in Google Workspace
     * Add-ons](https://developers.google.com/apps-script/add-ons/concepts/widgets#text_formatting).
     *
     * Generated from protobuf field <code>string text = 4;</code>
     */
    protected $text = '';
    /**
     * The wrap text setting. If `true`, the text wraps and displays on
     * multiple lines. Otherwise, the text is truncated.
     * Only applies to `text`, not `topLabel` and `bottomLabel`.
     *
     * Generated from protobuf field <code>bool wrap_text = 5;</code>
     */
    protected $wrap_text = false;
    /**
     * The text that appears below `text`. Always wraps.
     *
     * Generated from protobuf field <code>string bottom_label = 6;</code>
     */
    protected $bottom_label = '';
    /**
     * This action is triggered when users click `topLabel` or `bottomLabel`.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.OnClick on_click = 7;</code>
     */
    protected $on_click = null;
    protected $control;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Apps\Card\V1\Icon $icon
     *           Deprecated in favor of `startIcon`.
     *     @type \Google\Apps\Card\V1\Icon $start_icon
     *           The icon displayed in front of the text.
     *     @type string $top_label
     *           The text that appears above `text`. Always truncates.
     *     @type string $text
     *           Required. The primary text.
     *           Supports simple formatting. For more information
     *           about formatting text, see
     *           [Formatting text in Google Chat
     *           apps](https://developers.google.com/workspace/chat/format-messages#card-formatting)
     *           and
     *           [Formatting
     *           text in Google Workspace
     *           Add-ons](https://developers.google.com/apps-script/add-ons/concepts/widgets#text_formatting).
     *     @type bool $wrap_text
     *           The wrap text setting. If `true`, the text wraps and displays on
     *           multiple lines. Otherwise, the text is truncated.
     *           Only applies to `text`, not `topLabel` and `bottomLabel`.
     *     @type string $bottom_label
     *           The text that appears below `text`. Always wraps.
     *     @type \Google\Apps\Card\V1\OnClick $on_click
     *           This action is triggered when users click `topLabel` or `bottomLabel`.
     *     @type \Google\Apps\Card\V1\Button $button
     *           A button that a user can click to trigger an action.
     *     @type \Google\Apps\Card\V1\DecoratedText\SwitchControl $switch_control
     *           A switch widget that a user can click to change its state and trigger an
     *           action.
     *     @type \Google\Apps\Card\V1\Icon $end_icon
     *           An icon displayed after the text.
     *           Supports
     *           [built-in](https://developers.google.com/workspace/chat/format-messages#builtinicons)
     *           and
     *           [custom](https://developers.google.com/workspace/chat/format-messages#customicons)
     *           icons.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Card\V1\Card::initOnce();
        parent::__construct($data);
    }

    /**
     * Deprecated in favor of `startIcon`.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Icon icon = 1 [deprecated = true];</code>
     * @return \Google\Apps\Card\V1\Icon|null
     * @deprecated
     */
    public function getIcon()
    {
        if (isset($this->icon)) {
            @trigger_error('icon is deprecated.', E_USER_DEPRECATED);
        }
        return $this->icon;
    }

    public function hasIcon()
    {
        if (isset($this->icon)) {
            @trigger_error('icon is deprecated.', E_USER_DEPRECATED);
        }
        return isset($this->icon);
    }

    public function clearIcon()
    {
        @trigger_error('icon is deprecated.', E_USER_DEPRECATED);
        unset($this->icon);
    }

    /**
     * Deprecated in favor of `startIcon`.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Icon icon = 1 [deprecated = true];</code>
     * @param \Google\Apps\Card\V1\Icon $var
     * @return $this
     * @deprecated
     */
    public function setIcon($var)
    {
        @trigger_error('icon is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\Icon::class);
        $this->icon = $var;

        return $this;
    }

    /**
     * The icon displayed in front of the text.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Icon start_icon = 12;</code>
     * @return \Google\Apps\Card\V1\Icon|null
     */
    public function getStartIcon()
    {
        return $this->start_icon;
    }

    public function hasStartIcon()
    {
        return isset($this->start_icon);
    }

    public function clearStartIcon()
    {
        unset($this->start_icon);
    }

    /**
     * The icon displayed in front of the text.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Icon start_icon = 12;</code>
     * @param \Google\Apps\Card\V1\Icon $var
     * @return $this
     */
    public function setStartIcon($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\Icon::class);
        $this->start_icon = $var;

        return $this;
    }

    /**
     * The text that appears above `text`. Always truncates.
     *
     * Generated from protobuf field <code>string top_label = 3;</code>
     * @return string
     */
    public function getTopLabel()
    {
        return $this->top_label;
    }

    /**
     * The text that appears above `text`. Always truncates.
     *
     * Generated from protobuf field <code>string top_label = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTopLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->top_label = $var;

        return $this;
    }

    /**
     * Required. The primary text.
     * Supports simple formatting. For more information
     * about formatting text, see
     * [Formatting text in Google Chat
     * apps](https://developers.google.com/workspace/chat/format-messages#card-formatting)
     * and
     * [Formatting
     * text in Google Workspace
     * Add-ons](https://developers.google.com/apps-script/add-ons/concepts/widgets#text_formatting).
     *
     * Generated from protobuf field <code>string text = 4;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Required. The primary text.
     * Supports simple formatting. For more information
     * about formatting text, see
     * [Formatting text in Google Chat
     * apps](https://developers.google.com/workspace/chat/format-messages#card-formatting)
     * and
     * [Formatting
     * text in Google Workspace
     * Add-ons](https://developers.google.com/apps-script/add-ons/concepts/widgets#text_formatting).
     *
     * Generated from protobuf field <code>string text = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * The wrap text setting. If `true`, the text wraps and displays on
     * multiple lines. Otherwise, the text is truncated.
     * Only applies to `text`, not `topLabel` and `bottomLabel`.
     *
     * Generated from protobuf field <code>bool wrap_text = 5;</code>
     * @return bool
     */
    public function getWrapText()
    {
        return $this->wrap_text;
    }

    /**
     * The wrap text setting. If `true`, the text wraps and displays on
     * multiple lines. Otherwise, the text is truncated.
     * Only applies to `text`, not `topLabel` and `bottomLabel`.
     *
     * Generated from protobuf field <code>bool wrap_text = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setWrapText($var)
    {
        GPBUtil::checkBool($var);
        $this->wrap_text = $var;

        return $this;
    }

    /**
     * The text that appears below `text`. Always wraps.
     *
     * Generated from protobuf field <code>string bottom_label = 6;</code>
     * @return string
     */
    public function getBottomLabel()
    {
        return $this->bottom_label;
    }

    /**
     * The text that appears below `text`. Always wraps.
     *
     * Generated from protobuf field <code>string bottom_label = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setBottomLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->bottom_label = $var;

        return $this;
    }

    /**
     * This action is triggered when users click `topLabel` or `bottomLabel`.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.OnClick on_click = 7;</code>
     * @return \Google\Apps\Card\V1\OnClick|null
     */
    public function getOnClick()
    {
        return $this->on_click;
    }

    public function hasOnClick()
    {
        return isset($this->on_click);
    }

    public function clearOnClick()
    {
        unset($this->on_click);
    }

    /**
     * This action is triggered when users click `topLabel` or `bottomLabel`.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.OnClick on_click = 7;</code>
     * @param \Google\Apps\Card\V1\OnClick $var
     * @return $this
     */
    public function setOnClick($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\OnClick::class);
        $this->on_click = $var;

        return $this;
    }

    /**
     * A button that a user can click to trigger an action.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Button button = 8;</code>
     * @return \Google\Apps\Card\V1\Button|null
     */
    public function getButton()
    {
        return $this->readOneof(8);
    }

    public function hasButton()
    {
        return $this->hasOneof(8);
    }

    /**
     * A button that a user can click to trigger an action.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Button button = 8;</code>
     * @param \Google\Apps\Card\V1\Button $var
     * @return $this
     */
    public function setButton($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\Button::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * A switch widget that a user can click to change its state and trigger an
     * action.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.DecoratedText.SwitchControl switch_control = 9;</code>
     * @return \Google\Apps\Card\V1\DecoratedText\SwitchControl|null
     */
    public function getSwitchControl()
    {
        return $this->readOneof(9);
    }

    public function hasSwitchControl()
    {
        return $this->hasOneof(9);
    }

    /**
     * A switch widget that a user can click to change its state and trigger an
     * action.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.DecoratedText.SwitchControl switch_control = 9;</code>
     * @param \Google\Apps\Card\V1\DecoratedText\SwitchControl $var
     * @return $this
     */
    public function setSwitchControl($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\DecoratedText\SwitchControl::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * An icon displayed after the text.
     * Supports
     * [built-in](https://developers.google.com/workspace/chat/format-messages#builtinicons)
     * and
     * [custom](https://developers.google.com/workspace/chat/format-messages#customicons)
     * icons.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Icon end_icon = 11;</code>
     * @return \Google\Apps\Card\V1\Icon|null
     */
    public function getEndIcon()
    {
        return $this->readOneof(11);
    }

    public function hasEndIcon()
    {
        return $this->hasOneof(11);
    }

    /**
     * An icon displayed after the text.
     * Supports
     * [built-in](https://developers.google.com/workspace/chat/format-messages#builtinicons)
     * and
     * [custom](https://developers.google.com/workspace/chat/format-messages#customicons)
     * icons.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Icon end_icon = 11;</code>
     * @param \Google\Apps\Card\V1\Icon $var
     * @return $this
     */
    public function setEndIcon($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\Icon::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getControl()
    {
        return $this->whichOneof("control");
    }

}

