<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_fcdb5150ba7c21b6a189f59bfc9bd551b78b8eaa753f1846e35221fb3ad5ddc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_2609c5c6ae2258f4fcd6f4046c581071835555c97442ac18422ada9494e7dcf7 = $this->env->getExtension("native_profiler");
        $__internal_2609c5c6ae2258f4fcd6f4046c581071835555c97442ac18422ada9494e7dcf7->enter($__internal_2609c5c6ae2258f4fcd6f4046c581071835555c97442ac18422ada9494e7dcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2609c5c6ae2258f4fcd6f4046c581071835555c97442ac18422ada9494e7dcf7->leave($__internal_2609c5c6ae2258f4fcd6f4046c581071835555c97442ac18422ada9494e7dcf7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1c42bdd3d93e3d76e95469957bc551a97031c2b489cf023d73f37bfef33a702 = $this->env->getExtension("native_profiler");
        $__internal_d1c42bdd3d93e3d76e95469957bc551a97031c2b489cf023d73f37bfef33a702->enter($__internal_d1c42bdd3d93e3d76e95469957bc551a97031c2b489cf023d73f37bfef33a702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d1c42bdd3d93e3d76e95469957bc551a97031c2b489cf023d73f37bfef33a702->leave($__internal_d1c42bdd3d93e3d76e95469957bc551a97031c2b489cf023d73f37bfef33a702_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
