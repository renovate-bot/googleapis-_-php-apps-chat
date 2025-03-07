<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/chat_service.proto

namespace GPBMetadata\Google\Chat\V1;

class ChatService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Chat\V1\Attachment::initOnce();
        \GPBMetadata\Google\Chat\V1\Membership::initOnce();
        \GPBMetadata\Google\Chat\V1\Message::initOnce();
        \GPBMetadata\Google\Chat\V1\Reaction::initOnce();
        \GPBMetadata\Google\Chat\V1\Space::initOnce();
        \GPBMetadata\Google\Chat\V1\SpaceEvent::initOnce();
        \GPBMetadata\Google\Chat\V1\SpaceNotificationSetting::initOnce();
        \GPBMetadata\Google\Chat\V1\SpaceReadState::initOnce();
        \GPBMetadata\Google\Chat\V1\SpaceSetup::initOnce();
        \GPBMetadata\Google\Chat\V1\ThreadReadState::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(
            '
�3
!google/chat/v1/chat_service.protogoogle.chat.v1google/api/client.protogoogle/chat/v1/attachment.protogoogle/chat/v1/membership.protogoogle/chat/v1/message.protogoogle/chat/v1/reaction.protogoogle/chat/v1/space.proto google/chat/v1/space_event.proto/google/chat/v1/space_notification_setting.proto%google/chat/v1/space_read_state.proto google/chat/v1/space_setup.proto&google/chat/v1/thread_read_state.protogoogle/protobuf/empty.proto2�.
ChatService�
CreateMessage$.google.chat.v1.CreateMessageRequest.google.chat.v1.Message"K�Aparent,message,message_id���)"/v1/{parent=spaces/*}/messages:message�
ListMessages#.google.chat.v1.ListMessagesRequest$.google.chat.v1.ListMessagesResponse"/�Aparent��� /v1/{parent=spaces/*}/messages�
ListMemberships&.google.chat.v1.ListMembershipsRequest\'.google.chat.v1.ListMembershipsResponse".�Aparent���/v1/{parent=spaces/*}/members
GetMembership$.google.chat.v1.GetMembershipRequest.google.chat.v1.Membership",�Aname���/v1/{name=spaces/*/members/*}w

GetMessage!.google.chat.v1.GetMessageRequest.google.chat.v1.Message"-�Aname��� /v1/{name=spaces/*/messages/*}�
UpdateMessage$.google.chat.v1.UpdateMessageRequest.google.chat.v1.Message"��Amessage,update_mask���d&/v1/{message.name=spaces/*/messages/*}:messageZ12&/v1/{message.name=spaces/*/messages/*}:message|
DeleteMessage$.google.chat.v1.DeleteMessageRequest.google.protobuf.Empty"-�Aname��� */v1/{name=spaces/*/messages/*}�
GetAttachment$.google.chat.v1.GetAttachmentRequest.google.chat.v1.Attachment";�Aname���.,/v1/{name=spaces/*/messages/*/attachments/*}�
UploadAttachment\'.google.chat.v1.UploadAttachmentRequest(.google.chat.v1.UploadAttachmentResponse"3���-"(/v1/{parent=spaces/*}/attachments:upload:*j

ListSpaces!.google.chat.v1.ListSpacesRequest".google.chat.v1.ListSpacesResponse"�A ���
/v1/spacesw
SearchSpaces#.google.chat.v1.SearchSpacesRequest$.google.chat.v1.SearchSpacesResponse"�A ���/v1/spaces:searchf
GetSpace.google.chat.v1.GetSpaceRequest.google.chat.v1.Space""�Aname���/v1/{name=spaces/*}k
CreateSpace".google.chat.v1.CreateSpaceRequest.google.chat.v1.Space"!�Aspace���"
/v1/spaces:spacec

SetUpSpace!.google.chat.v1.SetUpSpaceRequest.google.chat.v1.Space"���"/v1/spaces:setup:*�
UpdateSpace".google.chat.v1.UpdateSpaceRequest.google.chat.v1.Space"<�Aspace,update_mask���"2/v1/{space.name=spaces/*}:spacem
DeleteSpace".google.chat.v1.DeleteSpaceRequest.google.protobuf.Empty""�Aname���*/v1/{name=spaces/*}�
CompleteImportSpace*.google.chat.v1.CompleteImportSpaceRequest+.google.chat.v1.CompleteImportSpaceResponse"-���\'""/v1/{name=spaces/*}:completeImport:*z
FindDirectMessage(.google.chat.v1.FindDirectMessageRequest.google.chat.v1.Space"$���/v1/spaces:findDirectMessage�
CreateMembership\'.google.chat.v1.CreateMembershipRequest.google.chat.v1.Membership"E�Aparent,membership���+"/v1/{parent=spaces/*}/members:
membership�
UpdateMembership\'.google.chat.v1.UpdateMembershipRequest.google.chat.v1.Membership"U�Amembership,update_mask���62(/v1/{membership.name=spaces/*/members/*}:
membership�
DeleteMembership\'.google.chat.v1.DeleteMembershipRequest.google.chat.v1.Membership",�Aname���*/v1/{name=spaces/*/members/*}�
CreateReaction%.google.chat.v1.CreateReactionRequest.google.chat.v1.Reaction"N�Aparent,reaction���6"*/v1/{parent=spaces/*/messages/*}/reactions:reaction�
ListReactions$.google.chat.v1.ListReactionsRequest%.google.chat.v1.ListReactionsResponse";�Aparent���,*/v1/{parent=spaces/*/messages/*}/reactions�
DeleteReaction%.google.chat.v1.DeleteReactionRequest.google.protobuf.Empty"9�Aname���,**/v1/{name=spaces/*/messages/*/reactions/*}�
GetSpaceReadState(.google.chat.v1.GetSpaceReadStateRequest.google.chat.v1.SpaceReadState"9�Aname���,*/v1/{name=users/*/spaces/*/spaceReadState}�
UpdateSpaceReadState+.google.chat.v1.UpdateSpaceReadStateRequest.google.chat.v1.SpaceReadState"t�Aspace_read_state,update_mask���O2;/v1/{space_read_state.name=users/*/spaces/*/spaceReadState}:space_read_state�
GetThreadReadState).google.chat.v1.GetThreadReadStateRequest.google.chat.v1.ThreadReadState"D�Aname���75/v1/{name=users/*/spaces/*/threads/*/threadReadState}�
GetSpaceEvent$.google.chat.v1.GetSpaceEventRequest.google.chat.v1.SpaceEvent"0�Aname���#!/v1/{name=spaces/*/spaceEvents/*}�
ListSpaceEvents&.google.chat.v1.ListSpaceEventsRequest\'.google.chat.v1.ListSpaceEventsResponse"9�Aparent,filter���#!/v1/{parent=spaces/*}/spaceEvents�
GetSpaceNotificationSetting2.google.chat.v1.GetSpaceNotificationSettingRequest(.google.chat.v1.SpaceNotificationSetting"C�Aname���64/v1/{name=users/*/spaces/*/spaceNotificationSetting}�
UpdateSpaceNotificationSetting5.google.chat.v1.UpdateSpaceNotificationSettingRequest(.google.chat.v1.SpaceNotificationSetting"��A&space_notification_setting,update_mask���m2O/v1/{space_notification_setting.name=users/*/spaces/*/spaceNotificationSetting}:space_notification_setting�	�Achat.googleapis.com�A�	https://www.googleapis.com/auth/chat.admin.delete,https://www.googleapis.com/auth/chat.admin.memberships,https://www.googleapis.com/auth/chat.admin.memberships.readonly,https://www.googleapis.com/auth/chat.admin.spaces,https://www.googleapis.com/auth/chat.admin.spaces.readonly,https://www.googleapis.com/auth/chat.bot,https://www.googleapis.com/auth/chat.delete,https://www.googleapis.com/auth/chat.import,https://www.googleapis.com/auth/chat.memberships,https://www.googleapis.com/auth/chat.memberships.app,https://www.googleapis.com/auth/chat.memberships.readonly,https://www.googleapis.com/auth/chat.messages,https://www.googleapis.com/auth/chat.messages.create,https://www.googleapis.com/auth/chat.messages.reactions,https://www.googleapis.com/auth/chat.messages.reactions.create,https://www.googleapis.com/auth/chat.messages.reactions.readonly,https://www.googleapis.com/auth/chat.messages.readonly,https://www.googleapis.com/auth/chat.spaces,https://www.googleapis.com/auth/chat.spaces.create,https://www.googleapis.com/auth/chat.spaces.readonly,https://www.googleapis.com/auth/chat.users.readstate,https://www.googleapis.com/auth/chat.users.readstate.readonly,https://www.googleapis.com/auth/chat.users.spacesettingsB�
com.google.chat.v1BChatServiceProtoPZ,cloud.google.com/go/chat/apiv1/chatpb;chatpb�DYNAPIProto�Google.Apps.Chat.V1�Google\\Apps\\Chat\\V1�Google::Apps::Chat::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

