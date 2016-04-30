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
        $__internal_43667458d3a82046100a1f7417ae3e044949c565f1e03379e2f8ba9b68f122f5 = $this->env->getExtension("native_profiler");
        $__internal_43667458d3a82046100a1f7417ae3e044949c565f1e03379e2f8ba9b68f122f5->enter($__internal_43667458d3a82046100a1f7417ae3e044949c565f1e03379e2f8ba9b68f122f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43667458d3a82046100a1f7417ae3e044949c565f1e03379e2f8ba9b68f122f5->leave($__internal_43667458d3a82046100a1f7417ae3e044949c565f1e03379e2f8ba9b68f122f5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f8ac70cb3fc2a73e69c6a32b069a0e1b04aac954850ea421a7fca019cb1f335 = $this->env->getExtension("native_profiler");
        $__internal_0f8ac70cb3fc2a73e69c6a32b069a0e1b04aac954850ea421a7fca019cb1f335->enter($__internal_0f8ac70cb3fc2a73e69c6a32b069a0e1b04aac954850ea421a7fca019cb1f335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_0f8ac70cb3fc2a73e69c6a32b069a0e1b04aac954850ea421a7fca019cb1f335->leave($__internal_0f8ac70cb3fc2a73e69c6a32b069a0e1b04aac954850ea421a7fca019cb1f335_prof);

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
