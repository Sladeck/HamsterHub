<?php

/* HamsterHubBundle:Base:menu.html.twig */
class __TwigTemplate_6a1a1d63b802ca2bb50f6497a90be5b312d32070359b2de285c5a2b1b674c1d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49aee36e878ca5a5e8eab4513fb84723c3048e9f619a3fc1a0d703e2919c6e6e = $this->env->getExtension("native_profiler");
        $__internal_49aee36e878ca5a5e8eab4513fb84723c3048e9f619a3fc1a0d703e2919c6e6e->enter($__internal_49aee36e878ca5a5e8eab4513fb84723c3048e9f619a3fc1a0d703e2919c6e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:menu.html.twig"));

        // line 1
        echo "<nav id='cssmenu'>
    <ul>
       <li class='active'><a href='/'><span>Accueil</span></a></li>
       ";
        // line 4
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 5
            echo "          <li><a href='/profile'><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span></a>
            <ul>
              <li><a href=\"/profile/edit\">Modifier Mon Profil</a></li>
              <li><a href=\"/myVideo/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "\">Mes vidéos</a></li>
            </ul>
          </li>
          <li id=\"postVids\"><a><span>Poster une vidéo</span></a></li>
          <li class=\"last\"><a href='/logout'><span>Déconnexion</span></a></li>
       ";
        } else {
            // line 14
            echo "          <li id=\"logIn\"><a><span>Connexion</span></a></li>
          <li id=\"register\" class=\"last\"><a><span>Inscription</span></a></li>
       ";
        }
        // line 17
        echo "    </ul>
</nav>
";
        // line 19
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 20
            echo "  <div class=\"uploadPopUp\">
    <form id=\"upload\" method=\"post\" class=\"modal-content\">
      <span class=\"close\">x</span>
        <h1>Mettre un post en ligne : </h1><br>
        <input type=\"text\" name=\"name\" placeholder=\"Titre\" required><br><br>
        <input type=\"text\" name=\"url\" placeholder=\"Url\" required><br><br>
        <input type=\"text\" name=\"description\" placeholder=\"Description\" required><br><br>
        <input type=\"submit\" name=\"formVideo\" value=\"OK\">
    </form>
  </div>
";
        }
        // line 31
        echo "<div class=\"registerPopUp\">
  <div class=\"modal-content\">
    <span class=\"close\">x</span>
    ";
        // line 34
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_registration_register"), array());
        // line 35
        echo "  </div>
</div>
<div class=\"loginPopUp\">
  <div class=\"modal-content\">
    <span class=\"close\">x</span>
    ";
        // line 40
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_security_login"), array());
        // line 41
        echo "  </div>
</div>
";
        
        $__internal_49aee36e878ca5a5e8eab4513fb84723c3048e9f619a3fc1a0d703e2919c6e6e->leave($__internal_49aee36e878ca5a5e8eab4513fb84723c3048e9f619a3fc1a0d703e2919c6e6e_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Base:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 41,  83 => 40,  76 => 35,  74 => 34,  69 => 31,  56 => 20,  54 => 19,  50 => 17,  45 => 14,  36 => 8,  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <nav id='cssmenu'>*/
/*     <ul>*/
/*        <li class='active'><a href='/'><span>Accueil</span></a></li>*/
/*        {% if ((is_granted("IS_AUTHENTICATED_REMEMBERED")) or (is_granted("IS_AUTHENTICATED_FULLY"))) %}*/
/*           <li><a href='/profile'><span>{{app.user.username}}</span></a>*/
/*             <ul>*/
/*               <li><a href="/profile/edit">Modifier Mon Profil</a></li>*/
/*               <li><a href="/myVideo/{{ app.user.username }}">Mes vidéos</a></li>*/
/*             </ul>*/
/*           </li>*/
/*           <li id="postVids"><a><span>Poster une vidéo</span></a></li>*/
/*           <li class="last"><a href='/logout'><span>Déconnexion</span></a></li>*/
/*        {% else %}*/
/*           <li id="logIn"><a><span>Connexion</span></a></li>*/
/*           <li id="register" class="last"><a><span>Inscription</span></a></li>*/
/*        {% endif %}*/
/*     </ul>*/
/* </nav>*/
/* {% if ((is_granted("IS_AUTHENTICATED_REMEMBERED")) or (is_granted("IS_AUTHENTICATED_FULLY"))) %}*/
/*   <div class="uploadPopUp">*/
/*     <form id="upload" method="post" class="modal-content">*/
/*       <span class="close">x</span>*/
/*         <h1>Mettre un post en ligne : </h1><br>*/
/*         <input type="text" name="name" placeholder="Titre" required><br><br>*/
/*         <input type="text" name="url" placeholder="Url" required><br><br>*/
/*         <input type="text" name="description" placeholder="Description" required><br><br>*/
/*         <input type="submit" name="formVideo" value="OK">*/
/*     </form>*/
/*   </div>*/
/* {% endif %}*/
/* <div class="registerPopUp">*/
/*   <div class="modal-content">*/
/*     <span class="close">x</span>*/
/*     {% render url('fos_user_registration_register') %}*/
/*   </div>*/
/* </div>*/
/* <div class="loginPopUp">*/
/*   <div class="modal-content">*/
/*     <span class="close">x</span>*/
/*     {% render url('fos_user_security_login') %}*/
/*   </div>*/
/* </div>*/
/* */
