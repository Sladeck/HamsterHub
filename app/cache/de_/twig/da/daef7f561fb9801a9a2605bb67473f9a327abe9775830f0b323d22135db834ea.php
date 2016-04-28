<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_2eac0ce11c4b3ba372903f949d8c49befe23de3e68ac3814f7cf2129a1ed088c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58cbe9bc06393f0098f2d1fea3daef7a09d53982c938175668497ad3f5f5304f = $this->env->getExtension("native_profiler");
        $__internal_58cbe9bc06393f0098f2d1fea3daef7a09d53982c938175668497ad3f5f5304f->enter($__internal_58cbe9bc06393f0098f2d1fea3daef7a09d53982c938175668497ad3f5f5304f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58cbe9bc06393f0098f2d1fea3daef7a09d53982c938175668497ad3f5f5304f->leave($__internal_58cbe9bc06393f0098f2d1fea3daef7a09d53982c938175668497ad3f5f5304f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_befa797ed507757210b525d89f2076a623f5fae02a1dcff34eb9e13b92203da3 = $this->env->getExtension("native_profiler");
        $__internal_befa797ed507757210b525d89f2076a623f5fae02a1dcff34eb9e13b92203da3->enter($__internal_befa797ed507757210b525d89f2076a623f5fae02a1dcff34eb9e13b92203da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_befa797ed507757210b525d89f2076a623f5fae02a1dcff34eb9e13b92203da3->leave($__internal_befa797ed507757210b525d89f2076a623f5fae02a1dcff34eb9e13b92203da3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
