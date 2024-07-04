<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/space.proto

namespace GPBMetadata\Google\Chat\V1;

class Space
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Chat\V1\HistoryState::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
google/chat/v1/space.protogoogle.chat.v1google/api/resource.proto"google/chat/v1/history_state.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�	
Space
name (	/
type (2.google.chat.v1.Space.TypeB�A3

space_type
 (2.google.chat.v1.Space.SpaceType
single_user_bot_dm (B�A
threaded (B�A
display_name (	"
external_user_allowed (B�AM
space_threading_state	 (2).google.chat.v1.Space.SpaceThreadingStateB�A9
space_details (2".google.chat.v1.Space.SpaceDetails9
space_history_state (2.google.chat.v1.HistoryState
import_mode (B�A7
create_time (2.google.protobuf.TimestampB�A�A
admin_installed (B�AB
access_settings (2$.google.chat.v1.Space.AccessSettingsB�A
	space_uri (	B�A7
SpaceDetails
description (	

guidelines (	�
AccessSettingsK
access_state (20.google.chat.v1.Space.AccessSettings.AccessStateB�A
audience (	B�A"J
AccessState
ACCESS_STATE_UNSPECIFIED 
PRIVATE
DISCOVERABLE".
Type
TYPE_UNSPECIFIED 
ROOM
DM"V
	SpaceType
SPACE_TYPE_UNSPECIFIED 	
SPACE

GROUP_CHAT
DIRECT_MESSAGE"�
SpaceThreadingState%
!SPACE_THREADING_STATE_UNSPECIFIED 
THREADED_MESSAGES
GROUPED_MESSAGES
UNTHREADED_MESSAGES:.�A+
chat.googleapis.com/Spacespaces/{space}"X
CreateSpaceRequest)
space (2.google.chat.v1.SpaceB�A

request_id (	B�A"Y
ListSpacesRequest
	page_size (B�A

page_token (	B�A
filter (	B�A"T
ListSpacesResponse%
spaces (2.google.chat.v1.Space
next_page_token (	"B
GetSpaceRequest/
name (	B!�A�A
chat.googleapis.com/Space"-
FindDirectMessageRequest
name (	B�A"p
UpdateSpaceRequest)
space (2.google.chat.v1.SpaceB�A/
update_mask (2.google.protobuf.FieldMask"E
DeleteSpaceRequest/
name (	B!�A�A
chat.googleapis.com/Space"M
CompleteImportSpaceRequest/
name (	B!�A�A
chat.googleapis.com/Space"C
CompleteImportSpaceResponse$
space (2.google.chat.v1.SpaceB�
com.google.chat.v1B
SpaceProtoPZ,cloud.google.com/go/chat/apiv1/chatpb;chatpb�DYNAPIProto�Google.Apps.Chat.V1�Google\\Apps\\Chat\\V1�Google::Apps::Chat::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

