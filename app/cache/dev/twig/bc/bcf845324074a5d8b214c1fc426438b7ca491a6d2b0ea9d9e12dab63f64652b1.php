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
        $__internal_75bf45e69888bb4ad6b4061dcdae0ce1b904d5e4acc98e36124523ee7c6fdd5b = $this->env->getExtension("native_profiler");
        $__internal_75bf45e69888bb4ad6b4061dcdae0ce1b904d5e4acc98e36124523ee7c6fdd5b->enter($__internal_75bf45e69888bb4ad6b4061dcdae0ce1b904d5e4acc98e36124523ee7c6fdd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75bf45e69888bb4ad6b4061dcdae0ce1b904d5e4acc98e36124523ee7c6fdd5b->leave($__internal_75bf45e69888bb4ad6b4061dcdae0ce1b904d5e4acc98e36124523ee7c6fdd5b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3128545b9bfe7d91aaef735d7a82c336d83315d425606a1ffea8f8b9bf56b774 = $this->env->getExtension("native_profiler");
        $__internal_3128545b9bfe7d91aaef735d7a82c336d83315d425606a1ffea8f8b9bf56b774->enter($__internal_3128545b9bfe7d91aaef735d7a82c336d83315d425606a1ffea8f8b9bf56b774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_3128545b9bfe7d91aaef735d7a82c336d83315d425606a1ffea8f8b9bf56b774->leave($__internal_3128545b9bfe7d91aaef735d7a82c336d83315d425606a1ffea8f8b9bf56b774_prof);

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
