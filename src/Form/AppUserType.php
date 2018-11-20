<?php

namespace App\Form;

use App\Entity\AppUser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

class AppUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'firstName',
                null,
                [
                    'label' => 'users.first.name',
                    'attr' => ['autofocus' => true, 'required' => true, 'class' => 'form-control'],
                ]
            )
            ->add('lastName',
                null,
                [
                    'label' => 'users.last.name',
                    'attr' => ['autofocus' => true, 'required' => true, 'class' => 'form-control'],
                ]
            )
            ->add('email',
                EmailType::class,
                    [
                        'label' => 'Email',
                        'attr' => ['required' => true, 'class' => 'form-control', 'min' => 3, 'placeholder' => 'user@gmail.com'],
                    ]
                )
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => ['attr' => ['class' => 'form-control']],
                'required' => true,
                'first_options' => ['label' => 'users.password'],
                'second_options' => ['label' => 'users.password.repeat'],
            ])
            ->add('username',
                null,
                [
                    'label' => 'users.login',
                    'attr' => ['autofocus' => true, 'required' => true, 'class' => 'form-control'],
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AppUser::class,
            'constraints' => [
                new UniqueEntity(['fields' => ['email'], 'entityClass' => AppUser::class]),
                new UniqueEntity(['fields' => ['username'], 'entityClass' => AppUser::class]),
            ],
        ]);
    }
}
