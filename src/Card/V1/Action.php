<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/card/v1/card.proto

namespace Google\Apps\Card\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An action that describes the behavior when the form is submitted.
 * For example, you can invoke an Apps Script script to handle the form.
 * If the action is triggered, the form values are sent to the server.
 * [Google Workspace Add-ons and Chat
 * apps](https://developers.google.com/workspace/extend):
 *
 * Generated from protobuf message <code>google.apps.card.v1.Action</code>
 */
class Action extends \Google\Protobuf\Internal\Message
{
    /**
     * A custom function to invoke when the containing element is
     * clicked or othrwise activated.
     * For example usage, see [Read form
     * data](https://developers.google.com/workspace/chat/read-form-data).
     *
     * Generated from protobuf field <code>string function = 1;</code>
     */
    protected $function = '';
    /**
     * List of action parameters.
     *
     * Generated from protobuf field <code>repeated .google.apps.card.v1.Action.ActionParameter parameters = 2;</code>
     */
    private $parameters;
    /**
     * Specifies the loading indicator that the action displays while
     * making the call to the action.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Action.LoadIndicator load_indicator = 3;</code>
     */
    protected $load_indicator = 0;
    /**
     * Indicates whether form values persist after the action. The default value
     * is `false`.
     * If `true`, form values remain after the action is triggered. To let the
     * user make changes while the action is being processed, set
     * [`LoadIndicator`](https://developers.google.com/workspace/add-ons/reference/rpc/google.apps.card.v1#loadindicator)
     * to `NONE`. For [card
     * messages](https://developers.google.com/workspace/chat/api/guides/v1/messages/create#create)
     * in Chat apps, you must also set the action's
     * [`ResponseType`](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages#responsetype)
     * to `UPDATE_MESSAGE` and use the same
     * [`card_id`](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages#CardWithId)
     * from the card that contained the action.
     * If `false`, the form values are cleared when the action is triggered.
     * To prevent the user from making changes while the action is being
     * processed, set
     * [`LoadIndicator`](https://developers.google.com/workspace/add-ons/reference/rpc/google.apps.card.v1#loadindicator)
     * to `SPINNER`.
     *
     * Generated from protobuf field <code>bool persist_values = 4;</code>
     */
    protected $persist_values = false;
    /**
     * Optional. Required when opening a
     * [dialog](https://developers.google.com/workspace/chat/dialogs).
     * What to do in response to an interaction with a user, such as a user
     * clicking a button in a card message.
     * If unspecified, the app responds by executing an `action`—like opening a
     * link or running a function—as normal.
     * By specifying an `interaction`, the app can respond in special interactive
     * ways. For example, by setting `interaction` to `OPEN_DIALOG`, the app can
     * open a [dialog](https://developers.google.com/workspace/chat/dialogs). When
     * specified, a loading indicator isn't shown. If specified for
     * an add-on, the entire card is stripped and nothing is shown in the client.
     * [Google Chat apps](https://developers.google.com/workspace/chat):
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Action.Interaction interaction = 5;</code>
     */
    protected $interaction = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $function
     *           A custom function to invoke when the containing element is
     *           clicked or othrwise activated.
     *           For example usage, see [Read form
     *           data](https://developers.google.com/workspace/chat/read-form-data).
     *     @type array<\Google\Apps\Card\V1\Action\ActionParameter>|\Google\Protobuf\Internal\RepeatedField $parameters
     *           List of action parameters.
     *     @type int $load_indicator
     *           Specifies the loading indicator that the action displays while
     *           making the call to the action.
     *     @type bool $persist_values
     *           Indicates whether form values persist after the action. The default value
     *           is `false`.
     *           If `true`, form values remain after the action is triggered. To let the
     *           user make changes while the action is being processed, set
     *           [`LoadIndicator`](https://developers.google.com/workspace/add-ons/reference/rpc/google.apps.card.v1#loadindicator)
     *           to `NONE`. For [card
     *           messages](https://developers.google.com/workspace/chat/api/guides/v1/messages/create#create)
     *           in Chat apps, you must also set the action's
     *           [`ResponseType`](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages#responsetype)
     *           to `UPDATE_MESSAGE` and use the same
     *           [`card_id`](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages#CardWithId)
     *           from the card that contained the action.
     *           If `false`, the form values are cleared when the action is triggered.
     *           To prevent the user from making changes while the action is being
     *           processed, set
     *           [`LoadIndicator`](https://developers.google.com/workspace/add-ons/reference/rpc/google.apps.card.v1#loadindicator)
     *           to `SPINNER`.
     *     @type int $interaction
     *           Optional. Required when opening a
     *           [dialog](https://developers.google.com/workspace/chat/dialogs).
     *           What to do in response to an interaction with a user, such as a user
     *           clicking a button in a card message.
     *           If unspecified, the app responds by executing an `action`—like opening a
     *           link or running a function—as normal.
     *           By specifying an `interaction`, the app can respond in special interactive
     *           ways. For example, by setting `interaction` to `OPEN_DIALOG`, the app can
     *           open a [dialog](https://developers.google.com/workspace/chat/dialogs). When
     *           specified, a loading indicator isn't shown. If specified for
     *           an add-on, the entire card is stripped and nothing is shown in the client.
     *           [Google Chat apps](https://developers.google.com/workspace/chat):
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Card\V1\Card::initOnce();
        parent::__construct($data);
    }

    /**
     * A custom function to invoke when the containing element is
     * clicked or othrwise activated.
     * For example usage, see [Read form
     * data](https://developers.google.com/workspace/chat/read-form-data).
     *
     * Generated from protobuf field <code>string function = 1;</code>
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * A custom function to invoke when the containing element is
     * clicked or othrwise activated.
     * For example usage, see [Read form
     * data](https://developers.google.com/workspace/chat/read-form-data).
     *
     * Generated from protobuf field <code>string function = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFunction($var)
    {
        GPBUtil::checkString($var, True);
        $this->function = $var;

        return $this;
    }

    /**
     * List of action parameters.
     *
     * Generated from protobuf field <code>repeated .google.apps.card.v1.Action.ActionParameter parameters = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * List of action parameters.
     *
     * Generated from protobuf field <code>repeated .google.apps.card.v1.Action.ActionParameter parameters = 2;</code>
     * @param array<\Google\Apps\Card\V1\Action\ActionParameter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Apps\Card\V1\Action\ActionParameter::class);
        $this->parameters = $arr;

        return $this;
    }

    /**
     * Specifies the loading indicator that the action displays while
     * making the call to the action.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Action.LoadIndicator load_indicator = 3;</code>
     * @return int
     */
    public function getLoadIndicator()
    {
        return $this->load_indicator;
    }

    /**
     * Specifies the loading indicator that the action displays while
     * making the call to the action.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Action.LoadIndicator load_indicator = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLoadIndicator($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Card\V1\Action\LoadIndicator::class);
        $this->load_indicator = $var;

        return $this;
    }

    /**
     * Indicates whether form values persist after the action. The default value
     * is `false`.
     * If `true`, form values remain after the action is triggered. To let the
     * user make changes while the action is being processed, set
     * [`LoadIndicator`](https://developers.google.com/workspace/add-ons/reference/rpc/google.apps.card.v1#loadindicator)
     * to `NONE`. For [card
     * messages](https://developers.google.com/workspace/chat/api/guides/v1/messages/create#create)
     * in Chat apps, you must also set the action's
     * [`ResponseType`](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages#responsetype)
     * to `UPDATE_MESSAGE` and use the same
     * [`card_id`](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages#CardWithId)
     * from the card that contained the action.
     * If `false`, the form values are cleared when the action is triggered.
     * To prevent the user from making changes while the action is being
     * processed, set
     * [`LoadIndicator`](https://developers.google.com/workspace/add-ons/reference/rpc/google.apps.card.v1#loadindicator)
     * to `SPINNER`.
     *
     * Generated from protobuf field <code>bool persist_values = 4;</code>
     * @return bool
     */
    public function getPersistValues()
    {
        return $this->persist_values;
    }

    /**
     * Indicates whether form values persist after the action. The default value
     * is `false`.
     * If `true`, form values remain after the action is triggered. To let the
     * user make changes while the action is being processed, set
     * [`LoadIndicator`](https://developers.google.com/workspace/add-ons/reference/rpc/google.apps.card.v1#loadindicator)
     * to `NONE`. For [card
     * messages](https://developers.google.com/workspace/chat/api/guides/v1/messages/create#create)
     * in Chat apps, you must also set the action's
     * [`ResponseType`](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages#responsetype)
     * to `UPDATE_MESSAGE` and use the same
     * [`card_id`](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages#CardWithId)
     * from the card that contained the action.
     * If `false`, the form values are cleared when the action is triggered.
     * To prevent the user from making changes while the action is being
     * processed, set
     * [`LoadIndicator`](https://developers.google.com/workspace/add-ons/reference/rpc/google.apps.card.v1#loadindicator)
     * to `SPINNER`.
     *
     * Generated from protobuf field <code>bool persist_values = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setPersistValues($var)
    {
        GPBUtil::checkBool($var);
        $this->persist_values = $var;

        return $this;
    }

    /**
     * Optional. Required when opening a
     * [dialog](https://developers.google.com/workspace/chat/dialogs).
     * What to do in response to an interaction with a user, such as a user
     * clicking a button in a card message.
     * If unspecified, the app responds by executing an `action`—like opening a
     * link or running a function—as normal.
     * By specifying an `interaction`, the app can respond in special interactive
     * ways. For example, by setting `interaction` to `OPEN_DIALOG`, the app can
     * open a [dialog](https://developers.google.com/workspace/chat/dialogs). When
     * specified, a loading indicator isn't shown. If specified for
     * an add-on, the entire card is stripped and nothing is shown in the client.
     * [Google Chat apps](https://developers.google.com/workspace/chat):
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Action.Interaction interaction = 5;</code>
     * @return int
     */
    public function getInteraction()
    {
        return $this->interaction;
    }

    /**
     * Optional. Required when opening a
     * [dialog](https://developers.google.com/workspace/chat/dialogs).
     * What to do in response to an interaction with a user, such as a user
     * clicking a button in a card message.
     * If unspecified, the app responds by executing an `action`—like opening a
     * link or running a function—as normal.
     * By specifying an `interaction`, the app can respond in special interactive
     * ways. For example, by setting `interaction` to `OPEN_DIALOG`, the app can
     * open a [dialog](https://developers.google.com/workspace/chat/dialogs). When
     * specified, a loading indicator isn't shown. If specified for
     * an add-on, the entire card is stripped and nothing is shown in the client.
     * [Google Chat apps](https://developers.google.com/workspace/chat):
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Action.Interaction interaction = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setInteraction($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Card\V1\Action\Interaction::class);
        $this->interaction = $var;

        return $this;
    }

}

