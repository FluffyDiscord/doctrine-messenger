<?php

namespace Symfony\Component\Messenger\Bridge\Doctrine\Transport;

use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Exception\MessageDecodingFailedException;
use Symfony\Component\Messenger\Stamp\NonSendableStampInterface;
use Symfony\Component\Messenger\Transport\Serialization\SerializerInterface;

class IgbinarySerializer implements SerializerInterface
{
    public function decode(array $encodedEnvelope): Envelope
    {
        $envelope = igbinary_unserialize(stream_get_contents($encodedEnvelope["body"]));
        assert($envelope instanceof Envelope);

        fclose($encodedEnvelope["body"]);

        return $envelope;
    }

    public function encode(Envelope $envelope): array
    {
        $envelope = $envelope->withoutStampsOfType(NonSendableStampInterface::class);

        return [
            "body" => igbinary_serialize($envelope),
        ];
    }
}
