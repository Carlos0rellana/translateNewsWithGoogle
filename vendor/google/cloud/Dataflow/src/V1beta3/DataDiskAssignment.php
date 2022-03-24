<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/streaming.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data disk assignment for a given VM instance.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.DataDiskAssignment</code>
 */
class DataDiskAssignment extends \Google\Protobuf\Internal\Message
{
    /**
     * VM instance name the data disks mounted to, for example
     * "myproject-1014-104817-4c2-harness-0".
     *
     * Generated from protobuf field <code>string vm_instance = 1;</code>
     */
    private $vm_instance = '';
    /**
     * Mounted data disks. The order is important a data disk's 0-based index in
     * this list defines which persistent directory the disk is mounted to, for
     * example the list of { "myproject-1014-104817-4c2-harness-0-disk-0" },
     * { "myproject-1014-104817-4c2-harness-0-disk-1" }.
     *
     * Generated from protobuf field <code>repeated string data_disks = 2;</code>
     */
    private $data_disks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $vm_instance
     *           VM instance name the data disks mounted to, for example
     *           "myproject-1014-104817-4c2-harness-0".
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $data_disks
     *           Mounted data disks. The order is important a data disk's 0-based index in
     *           this list defines which persistent directory the disk is mounted to, for
     *           example the list of { "myproject-1014-104817-4c2-harness-0-disk-0" },
     *           { "myproject-1014-104817-4c2-harness-0-disk-1" }.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Streaming::initOnce();
        parent::__construct($data);
    }

    /**
     * VM instance name the data disks mounted to, for example
     * "myproject-1014-104817-4c2-harness-0".
     *
     * Generated from protobuf field <code>string vm_instance = 1;</code>
     * @return string
     */
    public function getVmInstance()
    {
        return $this->vm_instance;
    }

    /**
     * VM instance name the data disks mounted to, for example
     * "myproject-1014-104817-4c2-harness-0".
     *
     * Generated from protobuf field <code>string vm_instance = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVmInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_instance = $var;

        return $this;
    }

    /**
     * Mounted data disks. The order is important a data disk's 0-based index in
     * this list defines which persistent directory the disk is mounted to, for
     * example the list of { "myproject-1014-104817-4c2-harness-0-disk-0" },
     * { "myproject-1014-104817-4c2-harness-0-disk-1" }.
     *
     * Generated from protobuf field <code>repeated string data_disks = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataDisks()
    {
        return $this->data_disks;
    }

    /**
     * Mounted data disks. The order is important a data disk's 0-based index in
     * this list defines which persistent directory the disk is mounted to, for
     * example the list of { "myproject-1014-104817-4c2-harness-0-disk-0" },
     * { "myproject-1014-104817-4c2-harness-0-disk-1" }.
     *
     * Generated from protobuf field <code>repeated string data_disks = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataDisks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->data_disks = $arr;

        return $this;
    }

}
