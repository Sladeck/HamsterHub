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
        $__internal_97f631fca6d4996344b7ad22e3a577297106cc14c6430232c557d156f7a54bb1 = $this->env->getExtension("native_profiler");
        $__internal_97f631fca6d4996344b7ad22e3a577297106cc14c6430232c557d156f7a54bb1->enter($__internal_97f631fca6d4996344b7ad22e3a577297106cc14c6430232c557d156f7a54bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97f631fca6d4996344b7ad22e3a577297106cc14c6430232c557d156f7a54bb1->leave($__internal_97f631fca6d4996344b7ad22e3a577297106cc14c6430232c557d156f7a54bb1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ab18a9027f69f28aa0854de7095476497ab1c00917723a6ba4b19461c3fca45 = $this->env->getExtension("native_profiler");
        $__internal_7ab18a9027f69f28aa0854de7095476497ab1c00917723a6ba4b19461c3fca45->enter($__internal_7ab18a9027f69f28aa0854de7095476497ab1c00917723a6ba4b19461c3fca45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7ab18a9027f69f28aa0854de7095476497ab1c00917723a6ba4b19461c3fca45->leave($__internal_7ab18a9027f69f28aa0854de7095476497ab1c00917723a6ba4b19461c3fca45_prof);

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
