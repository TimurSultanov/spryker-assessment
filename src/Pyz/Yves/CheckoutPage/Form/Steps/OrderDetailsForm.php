<?php

declare(strict_types=1);

namespace Pyz\Yves\CheckoutPage\Form\Steps;

use Spryker\Yves\Kernel\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * @method \Pyz\Yves\CheckoutPage\CheckoutPageConfig getConfig()
 */
class OrderDetailsForm extends AbstractType
{
    const FIELD_ORDER_NAME = 'order-name';
    const PROPERTY_PATH_ORDER_NAME = 'orderName';

    public function getBlockPrefix(): string
    {
        return 'orderDetailsForm';
    }

    public function buildForm(FormBuilderInterface $builder, array $options): self
    {
        $builder->add(self::FIELD_ORDER_NAME, TextType::class, [
            'required' => true,
            'property_path' => static::PROPERTY_PATH_ORDER_NAME,
            'constraints' => [
                new NotBlank(),
                new Length(max: 30),
                new Regex('/^[a-z0-9]+$/'),
            ],
            'label' => 'Order Name', // Todo: translate
        ]);

        return $this;
    }
}
