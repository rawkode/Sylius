<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Component\Locale\Provider;

use PhpSpec\ObjectBehavior;
use Sylius\Component\Locale\Provider\ImmutableLocaleProvider;
use Sylius\Component\Locale\Provider\LocaleProviderInterface;

/**
 * @mixin ImmutableLocaleProvider
 *
 * @author Kamil Kokot <kamil.kokot@lakion.com>
 */
final class ImmutableLocaleProviderSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(['pl_PL', 'en_US'], 'pl_PL', 'en_US');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ImmutableLocaleProvider::class);
    }

    function it_is_a_locale_provider_interface()
    {
        $this->shouldImplement(LocaleProviderInterface::class);
    }

    function it_returns_available_locales_codes()
    {
        $this->getAvailableLocalesCodes()->shouldReturn(['pl_PL', 'en_US']);
    }

    function it_returns_the_default_locale_code()
    {
        $this->getDefaultLocaleCode()->shouldReturn('pl_PL');
    }

    function it_returns_the_fallback_locale_code()
    {
        $this->getFallbackLocaleCode()->shouldReturn('en_US');
    }
}
