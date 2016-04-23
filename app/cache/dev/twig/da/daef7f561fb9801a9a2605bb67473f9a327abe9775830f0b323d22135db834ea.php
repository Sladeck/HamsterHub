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
        $__internal_3620f4449cb2d3f760aac699a0517d6d7dd68bd4e28cd304383e8b9767f4095c = $this->env->getExtension("native_profiler");
        $__internal_3620f4449cb2d3f760aac699a0517d6d7dd68bd4e28cd304383e8b9767f4095c->enter($__internal_3620f4449cb2d3f760aac699a0517d6d7dd68bd4e28cd304383e8b9767f4095c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3620f4449cb2d3f760aac699a0517d6d7dd68bd4e28cd304383e8b9767f4095c->leave($__internal_3620f4449cb2d3f760aac699a0517d6d7dd68bd4e28cd304383e8b9767f4095c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_adf5e9181474e2b56999b636eb7ac5bf4f0e3257a1c9e7a8cc02ea97e0a08766 = $this->env->getExtension("native_profiler");
        $__internal_adf5e9181474e2b56999b636eb7ac5bf4f0e3257a1c9e7a8cc02ea97e0a08766->enter($__internal_adf5e9181474e2b56999b636eb7ac5bf4f0e3257a1c9e7a8cc02ea97e0a08766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_adf5e9181474e2b56999b636eb7ac5bf4f0e3257a1c9e7a8cc02ea97e0a08766->leave($__internal_adf5e9181474e2b56999b636eb7ac5bf4f0e3257a1c9e7a8cc02ea97e0a08766_prof);

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
