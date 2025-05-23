<?php

declare(strict_types=1);

namespace Hypervel\Support;

class DefaultProviders
{
    /**
     * The current providers.
     */
    protected array $providers;

    /**
     * Create a new default provider collection.
     */
    public function __construct(?array $providers = null)
    {
        $this->providers = $providers ?: [
            \Hypervel\Foundation\Providers\FoundationServiceProvider::class,
            \Hypervel\Foundation\Providers\FormRequestServiceProvider::class,
        ];
    }

    /**
     * Merge the given providers into the provider collection.
     */
    public function merge(array $providers): static
    {
        $this->providers = array_merge($this->providers, $providers);

        return new static($this->providers);
    }

    /**
     * Replace the given providers with other providers.
     */
    public function replace(array $replacements): static
    {
        $current = new Collection($this->providers);

        foreach ($replacements as $from => $to) {
            $key = $current->search($from);

            $current = is_int($key) ? $current->replace([$key => $to]) : $current;
        }

        return new static($current->values()->toArray());
    }

    /**
     * Disable the given providers.
     */
    public function except(array $providers): static
    {
        return new static((new Collection($this->providers))
            ->reject(fn ($p) => in_array($p, $providers))
            ->values()
            ->toArray());
    }

    /**
     * Convert the provider collection to an array.
     */
    public function toArray(): array
    {
        return $this->providers;
    }
}
