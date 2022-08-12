<?php

declare(strict_types=1);

namespace BitBag\ShopwareOrlenPaczkaPlugin\Finder;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\DataAbstractionLayer\Search\IdSearchResult;

final class RuleFinder implements RuleFinderInterface
{
    private EntityRepository $ruleRepository;

    public function __construct(EntityRepository $ruleRepository)
    {
        $this->ruleRepository = $ruleRepository;
    }

    public function getRuleIdsByName(string $name, Context $context): IdSearchResult
    {
        $ruleCriteria = (new Criteria())->addFilter(new EqualsFilter('name', $name));

        return $this->ruleRepository->searchIds($ruleCriteria, $context);
    }
}
