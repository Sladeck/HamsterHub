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
        $__internal_d41b6b957c9c2c2d03fcff4dd70f8d55adf2bc4c93128c0157699a305df7c342 = $this->env->getExtension("native_profiler");
        $__internal_d41b6b957c9c2c2d03fcff4dd70f8d55adf2bc4c93128c0157699a305df7c342->enter($__internal_d41b6b957c9c2c2d03fcff4dd70f8d55adf2bc4c93128c0157699a305df7c342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d41b6b957c9c2c2d03fcff4dd70f8d55adf2bc4c93128c0157699a305df7c342->leave($__internal_d41b6b957c9c2c2d03fcff4dd70f8d55adf2bc4c93128c0157699a305df7c342_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce665f9a74bc6f576225835bb0678de784c6c070ae543cffdd56886e8c8da56a = $this->env->getExtension("native_profiler");
        $__internal_ce665f9a74bc6f576225835bb0678de784c6c070ae543cffdd56886e8c8da56a->enter($__internal_ce665f9a74bc6f576225835bb0678de784c6c070ae543cffdd56886e8c8da56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ce665f9a74bc6f576225835bb0678de784c6c070ae543cffdd56886e8c8da56a->leave($__internal_ce665f9a74bc6f576225835bb0678de784c6c070ae543cffdd56886e8c8da56a_prof);

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
