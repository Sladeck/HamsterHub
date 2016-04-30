<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_949474312cc8842ac6ce56b9bbc84350724ec944725aca93282d2747d2e80f60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_089ee35aac2dc9d0556918b6894c8bc6fe796091449f439531d156aa727b8b8c = $this->env->getExtension("native_profiler");
        $__internal_089ee35aac2dc9d0556918b6894c8bc6fe796091449f439531d156aa727b8b8c->enter($__internal_089ee35aac2dc9d0556918b6894c8bc6fe796091449f439531d156aa727b8b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    </head>
    <body>
      ";
        // line 8
        $this->loadTemplate("HamsterHubBundle:Base:menu.html.twig", "FOSUserBundle::layout.html.twig", 8)->display($context);
        // line 9
        echo "        <div>
          toto
            ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 17
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 19
        echo "        </div>

        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
        <div>
            ";
        // line 30
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "        </div>
    </body>
</html>
";
        
        $__internal_089ee35aac2dc9d0556918b6894c8bc6fe796091449f439531d156aa727b8b8c->leave($__internal_089ee35aac2dc9d0556918b6894c8bc6fe796091449f439531d156aa727b8b8c_prof);

    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0958b55a195a0daf28d31755bce49306a679665f2ca04477c75db03610e4e84 = $this->env->getExtension("native_profiler");
        $__internal_c0958b55a195a0daf28d31755bce49306a679665f2ca04477c75db03610e4e84->enter($__internal_c0958b55a195a0daf28d31755bce49306a679665f2ca04477c75db03610e4e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 31
        echo "            ";
        
        $__internal_c0958b55a195a0daf28d31755bce49306a679665f2ca04477c75db03610e4e84->leave($__internal_c0958b55a195a0daf28d31755bce49306a679665f2ca04477c75db03610e4e84_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  115 => 30,  105 => 32,  103 => 30,  99 => 28,  93 => 27,  84 => 24,  79 => 23,  74 => 22,  70 => 21,  66 => 19,  58 => 17,  52 => 14,  48 => 13,  43 => 12,  41 => 11,  37 => 9,  35 => 8,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <link rel="stylesheet" href="{{ asset('css/main.css') }}">*/
/*     </head>*/
/*     <body>*/
/*       {% include 'HamsterHubBundle:Base:menu.html.twig' %}*/
/*         <div>*/
/*           toto*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
