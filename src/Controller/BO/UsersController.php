<?php

namespace App\Controller\BO;

use App\Entity\AppUser;
use App\Form\AppUserType;
use App\Repository\AppUserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/users")
 */
class UsersController extends AbstractController
{
    /**
     * @param AppUserRepository $userRepository
     *
     * @Route("/", name="users_index", methods="GET")
     *
     * @return Response
     */
    public function index(AppUserRepository $userRepository): Response
    {
        return $this->render('/users/list.html.twig',
            [
                'users' => $userRepository->findAll(),
            ]);
    }

    /**
     * @param Request           $request
     * @param AppUserRepository $userRepository
     *
     * @Route("/{id}/delete", name="user_delete", methods="GET")
     *
     * @return Response
     */
    public function delete(Request $request, AppUserRepository $userRepository): Response
    {
        $user = $userRepository->find($request->get('id'));

        if ($user->getId()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);

            $em->flush();
        }

        return $this->redirectToRoute('users_index');
    }

    /**
     * @param Request $request
     *
     * @Route("/add", name="user_add", methods="POST|GET")
     *
     * @return Response
     */
    public function new(Request $request): Response
    {
        $appUser = new AppUser();

        $form = $this->createForm(AppUserType::class, $appUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($appUser);
            $em->flush();
            $this->addFlash('success', $appUser->getFirstName() . ' ' . $appUser->getLastName() . ' successfully added');

            return $this->redirectToRoute('users_index');
        }

        return $this->render('users/new.html.twig', [
            'user' => $appUser,
            'form' => $form->createView(),
        ]);
    }
}
