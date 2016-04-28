<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_b5517d66306c79dbe02d0777105878e91791f216b6211883d425706eedde3306 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_ee0133850b995430510d55589482f7a8166f8e05b6cc3c2acf59b97e78dd51cd = $this->env->getExtension("native_profiler");
        $__internal_ee0133850b995430510d55589482f7a8166f8e05b6cc3c2acf59b97e78dd51cd->enter($__internal_ee0133850b995430510d55589482f7a8166f8e05b6cc3c2acf59b97e78dd51cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee0133850b995430510d55589482f7a8166f8e05b6cc3c2acf59b97e78dd51cd->leave($__internal_ee0133850b995430510d55589482f7a8166f8e05b6cc3c2acf59b97e78dd51cd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57fcf7738cd39c27b00127d1900308d2b8661c15c810953210e8ebe4723230dc = $this->env->getExtension("native_profiler");
        $__internal_57fcf7738cd39c27b00127d1900308d2b8661c15c810953210e8ebe4723230dc->enter($__internal_57fcf7738cd39c27b00127d1900308d2b8661c15c810953210e8ebe4723230dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_57fcf7738cd39c27b00127d1900308d2b8661c15c810953210e8ebe4723230dc->leave($__internal_57fcf7738cd39c27b00127d1900308d2b8661c15c810953210e8ebe4723230dc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
