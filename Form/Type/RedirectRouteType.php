<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Routing\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 11/1/14 3:56 PM
 */
class RedirectRouteType extends AbstractType
{

    /**
     * @var string
     */
    private $redirectRouteClass;

    /**
     * Constructor.
     *
     * @param string $redirectRouteClass
     */
    public function __construct($redirectRouteClass)
    {
        $this->redirectRouteClass = $redirectRouteClass;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'uri',
            'text',
            array(
                'label' => 'form.redirect_route.uri',
                'constraints' => array(new Assert\Url()),
                'required' => false,
            )
        );

        $builder->add(
            'routeName',
            'text',
            array(
                'label' => 'form.redirect_route.route_name',
                'required' => false,
            )
        );

        $builder->add(
            'routeTarget',
            'text',
            array(
                'label' => 'form.redirect_route.route_target',
                'required' => false,
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'translation_domain' => 'TadckaRouting',
                'data_class' => $this->redirectRouteClass,
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'tadcka_redirect_route';
    }
}