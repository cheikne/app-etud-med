
public class Logout{
    /**
        * @Route("/logout", name="app_logout", methods={"GET"})
        *
        */
        public function logout(): void
        {
            // controller can be blank: it will never be called!
            throw new \Exception('Don\'t forget to activate logout in security.yaml');
        }

}