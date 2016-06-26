<?php
/**
 * Auto generated from descriptor.proto at 2016-06-26 19:19:31
 */

namespace Google\Protobuf\Compiler {
/**
 * EnumDescriptorProto message
 */
class EnumDescriptorProto extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const VALUE = 2;
    const OPTIONS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::VALUE => array(
            'name' => 'value',
            'repeated' => true,
            'type' => '\Google\Protobuf\Compiler\EnumValueDescriptorProto'
        ),
        self::OPTIONS => array(
            'name' => 'options',
            'required' => false,
            'type' => '\Google\Protobuf\Compiler\EnumOptions'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NAME] = null;
        $this->values[self::VALUE] = array();
        $this->values[self::OPTIONS] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }

    /**
     * Appends value to 'value' list
     *
     * @param \Google\Protobuf\Compiler\EnumValueDescriptorProto $value Value to append
     *
     * @return null
     */
    public function appendValue(\Google\Protobuf\Compiler\EnumValueDescriptorProto $value)
    {
        return $this->append(self::VALUE, $value);
    }

    /**
     * Clears 'value' list
     *
     * @return null
     */
    public function clearValue()
    {
        return $this->clear(self::VALUE);
    }

    /**
     * Returns 'value' list
     *
     * @return \Google\Protobuf\Compiler\EnumValueDescriptorProto[]
     */
    public function getValue()
    {
        return $this->get(self::VALUE);
    }

    /**
     * Returns 'value' iterator
     *
     * @return \ArrayIterator
     */
    public function getValueIterator()
    {
        return new \ArrayIterator($this->get(self::VALUE));
    }

    /**
     * Returns element from 'value' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Google\Protobuf\Compiler\EnumValueDescriptorProto
     */
    public function getValueAt($offset)
    {
        return $this->get(self::VALUE, $offset);
    }

    /**
     * Returns count of 'value' list
     *
     * @return int
     */
    public function getValueCount()
    {
        return $this->count(self::VALUE);
    }

    /**
     * Sets value of 'options' property
     *
     * @param \Google\Protobuf\Compiler\EnumOptions $value Property value
     *
     * @return null
     */
    public function setOptions(\Google\Protobuf\Compiler\EnumOptions $value)
    {
        return $this->set(self::OPTIONS, $value);
    }

    /**
     * Returns value of 'options' property
     *
     * @return \Google\Protobuf\Compiler\EnumOptions
     */
    public function getOptions()
    {
        return $this->get(self::OPTIONS);
    }
}
}