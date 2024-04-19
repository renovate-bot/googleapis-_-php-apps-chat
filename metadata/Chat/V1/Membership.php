<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/membership.proto

namespace GPBMetadata\Google\Chat\V1;

class Membership
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Chat\V1\Group::initOnce();
        \GPBMetadata\Google\Chat\V1\User::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
google/chat/v1/membership.protogoogle.chat.v1google/api/resource.protogoogle/chat/v1/group.protogoogle/chat/v1/user.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�

Membership1
name (	B#�A 
chat.googleapis.com/Membership>
state (2*.google.chat.v1.Membership.MembershipStateB�A<
role (2).google.chat.v1.Membership.MembershipRoleB�A&
member (2.google.chat.v1.UserH -
group_member (2.google.chat.v1.GroupH 7
create_time (2.google.protobuf.TimestampB�A�A7
delete_time (2.google.protobuf.TimestampB�A�A"^
MembershipState 
MEMBERSHIP_STATE_UNSPECIFIED 

JOINED
INVITED
NOT_A_MEMBER"T
MembershipRole
MEMBERSHIP_ROLE_UNSPECIFIED 
ROLE_MEMBER
ROLE_MANAGER:D�AA
chat.googleapis.com/Membershipspaces/{space}/members/{member}B

memberType"�
CreateMembershipRequest6
parent (	B&�A�A chat.googleapis.com/Membership3

membership (2.google.chat.v1.MembershipB�A"�
UpdateMembershipRequest3

membership (2.google.chat.v1.MembershipB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
ListMembershipsRequest6
parent (	B&�A�A chat.googleapis.com/Membership
	page_size (B�A

page_token (	B�A
filter (	B�A
show_groups (B�A
show_invited (B�A"h
ListMembershipsResponse4
memberships (2.google.chat.v1.MembershipB�A
next_page_token (	"L
GetMembershipRequest4
name (	B&�A�A 
chat.googleapis.com/Membership"O
DeleteMembershipRequest4
name (	B&�A�A 
chat.googleapis.com/MembershipB�
com.google.chat.v1BMembershipProtoPZ,cloud.google.com/go/chat/apiv1/chatpb;chatpb�Google.Apps.Chat.V1�Google\\Apps\\Chat\\V1�Google::Apps::Chat::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

