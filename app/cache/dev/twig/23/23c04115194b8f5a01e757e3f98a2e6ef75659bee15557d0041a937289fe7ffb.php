<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_18a472385364aa1871b0f3d6314da9a36b3a917d9756b1190f20b54117d33ca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_7eba5e96c3e9cec67dbca0888a298d662c615ad9779771dfd930122e5d48df8e = $this->env->getExtension("native_profiler");
        $__internal_7eba5e96c3e9cec67dbca0888a298d662c615ad9779771dfd930122e5d48df8e->enter($__internal_7eba5e96c3e9cec67dbca0888a298d662c615ad9779771dfd930122e5d48df8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eba5e96c3e9cec67dbca0888a298d662c615ad9779771dfd930122e5d48df8e->leave($__internal_7eba5e96c3e9cec67dbca0888a298d662c615ad9779771dfd930122e5d48df8e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07adba7783de52c31b6d2b198c89e4d778a372b9118b6e79154c24b21aad64f7 = $this->env->getExtension("native_profiler");
        $__internal_07adba7783de52c31b6d2b198c89e4d778a372b9118b6e79154c24b21aad64f7->enter($__internal_07adba7783de52c31b6d2b198c89e4d778a372b9118b6e79154c24b21aad64f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_07adba7783de52c31b6d2b198c89e4d778a372b9118b6e79154c24b21aad64f7->leave($__internal_07adba7783de52c31b6d2b198c89e4d778a372b9118b6e79154c24b21aad64f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
