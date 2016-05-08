<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_c45e53598f54438925a7a713bade72fae3746f5a9fd8d01eb16aa8d3cdca9f38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_c6e796cce7ca89e1a5fba4bc641ed8ef8e356f7c7704810b8b9130d1dc756834 = $this->env->getExtension("native_profiler");
        $__internal_c6e796cce7ca89e1a5fba4bc641ed8ef8e356f7c7704810b8b9130d1dc756834->enter($__internal_c6e796cce7ca89e1a5fba4bc641ed8ef8e356f7c7704810b8b9130d1dc756834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6e796cce7ca89e1a5fba4bc641ed8ef8e356f7c7704810b8b9130d1dc756834->leave($__internal_c6e796cce7ca89e1a5fba4bc641ed8ef8e356f7c7704810b8b9130d1dc756834_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39c1ad71a61c18eba49f8f9aba55dbd6670b1e6d3efa1e038cec2d4e097e5c32 = $this->env->getExtension("native_profiler");
        $__internal_39c1ad71a61c18eba49f8f9aba55dbd6670b1e6d3efa1e038cec2d4e097e5c32->enter($__internal_39c1ad71a61c18eba49f8f9aba55dbd6670b1e6d3efa1e038cec2d4e097e5c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_39c1ad71a61c18eba49f8f9aba55dbd6670b1e6d3efa1e038cec2d4e097e5c32->leave($__internal_39c1ad71a61c18eba49f8f9aba55dbd6670b1e6d3efa1e038cec2d4e097e5c32_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
