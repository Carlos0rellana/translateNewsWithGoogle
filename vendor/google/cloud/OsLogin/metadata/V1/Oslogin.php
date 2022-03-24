<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1/oslogin.proto

namespace GPBMetadata\Google\Cloud\Oslogin\V1;

class Oslogin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Oslogin\Common\Common::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%google/cloud/oslogin/v1/oslogin.protogoogle.cloud.oslogin.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto(google/cloud/oslogin/common/common.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
LoginProfile
name (	B�AA
posix_accounts (2).google.cloud.oslogin.common.PosixAccountQ
ssh_public_keys (28.google.cloud.oslogin.v1.LoginProfile.SshPublicKeysEntry_
SshPublicKeysEntry
key (	8
value (2).google.cloud.oslogin.common.SshPublicKey:8"V
DeletePosixAccountRequest9
name (	B+�A�A%
#oslogin.googleapis.com/PosixAccount"V
DeleteSshPublicKeyRequest9
name (	B+�A�A%
#oslogin.googleapis.com/SshPublicKey"z
GetLoginProfileRequest9
name (	B+�A�A%#oslogin.googleapis.com/PosixAccount

project_id (	
	system_id (	"S
GetSshPublicKeyRequest9
name (	B+�A�A%
#oslogin.googleapis.com/SshPublicKey"�
ImportSshPublicKeyRequest;
parent (	B+�A�A%#oslogin.googleapis.com/SshPublicKeyF
ssh_public_key (2).google.cloud.oslogin.common.SshPublicKeyB�A

project_id (	"Z
ImportSshPublicKeyResponse<

UpdateSshPublicKeyRequest9
name (	B+�A�A%
#oslogin.googleapis.com/SshPublicKeyF
ssh_public_key (2).google.cloud.oslogin.common.SshPublicKeyB�A/
update_mask (2.google.protobuf.FieldMask2�	
OsLoginService�
DeletePosixAccount2.google.cloud.oslogin.v1.DeletePosixAccountRequest.google.protobuf.Empty",���*/v1/{name=users/*/projects/*}�Aname�
DeleteSshPublicKey2.google.cloud.oslogin.v1.DeleteSshPublicKeyRequest.google.protobuf.Empty"1���$*"/v1/{name=users/*/sshPublicKeys/*}�Aname�
GetLoginProfile/.google.cloud.oslogin.v1.GetLoginProfileRequest%.google.cloud.oslogin.v1.LoginProfile".���!/v1/{name=users/*}/loginProfile�Aname�
GetSshPublicKey/.google.cloud.oslogin.v1.GetSshPublicKeyRequest).google.cloud.oslogin.common.SshPublicKey"1���$"/v1/{name=users/*/sshPublicKeys/*}�Aname�
ImportSshPublicKey2.google.cloud.oslogin.v1.ImportSshPublicKeyRequest3.google.cloud.oslogin.v1.ImportSshPublicKeyResponse"z���9"\'/v1/{parent=users/*}:importSshPublicKey:ssh_public_key�Aparent,ssh_public_key�A parent,ssh_public_key,project_id�
UpdateSshPublicKey2.google.cloud.oslogin.v1.UpdateSshPublicKeyRequest).google.cloud.oslogin.common.SshPublicKey"r���42"/v1/{name=users/*/sshPublicKeys/*}:ssh_public_key�Aname,ssh_public_key�Aname,ssh_public_key,update_maskr�Aoslogin.googleapis.com�AVhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/computeB�
com.google.cloud.oslogin.v1BOsLoginProtoPZ>google.golang.org/genproto/googleapis/cloud/oslogin/v1;oslogin�Google.Cloud.OsLogin.V1�Google\\Cloud\\OsLogin\\V1�Google::Cloud::OsLogin::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
